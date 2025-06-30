<?php
namespace App\Http\Controllers;

use App\Models\EventBooking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class EventBookingController extends Controller
{
    // User: Show form
    public function create()
    {
        $packages = Package::all();
        return view('event_bookings.create', compact('packages'));
    }

    // User: Store event booking
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'customer_name' => 'required|string|max:255',
    //         'customer_email' => 'required|email',
    //         'customer_phone' => 'nullable|string',
    //         'event_date' => 'required|date|after_or_equal:today',
    //         'event_time' => 'required',
    //         'duration' => 'required|integer|min:1',
    //         'guests_count' => 'nullable|integer|min:1',
    //         'packages' => 'nullable|array',
    //     ]);

    //     $booking = EventBooking::create($request->only([
    //         'customer_name', 'customer_email', 'customer_phone',
    //         'event_date', 'event_time', 'duration', 'guests_count', 'special_requests',
    //     ]));

    //     if ($request->has('packages')) {
    //         foreach ($request->packages as $packageId => $details) {
    //             if (isset($details['selected'])) {
    //                 $quantity = $details['quantity'] ?? 1;
    //                 $booking->packages()->attach($packageId, ['quantity' => $quantity]);
    //             }
    //         }
    //     }

    //     return redirect()->route('event_bookings.create')->with('success', 'Your event booking request has been submitted!');
    // }

public function store(Request $request)
{
    $request->validate([
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email',
        'customer_phone' => 'nullable|string',
        'event_date' => 'required|date|after_or_equal:today',
        'event_time' => 'required',
        'duration' => 'required|integer|min:1',
        'guests_count' => 'nullable|integer|min:1',
        'payment_type' => 'required|in:deposit,full', // Add this validation!
        'packages' => 'nullable|array',
    ]);

    $booking = EventBooking::create($request->only([
        'customer_name', 'customer_email', 'customer_phone',
        'event_date', 'event_time', 'duration', 'guests_count', 'special_requests',
        'payment_type', // Save payment type too!
    ]));

    $totalPrice = 0;

    if ($request->has('packages')) {
        foreach ($request->packages as $packageId => $details) {
            if (isset($details['selected'])) {
                $package = Package::find($packageId);
                $quantity = $details['quantity'] ?? 1;
                $totalPrice += $package->price * $quantity;
                $booking->packages()->attach($packageId, ['quantity' => $quantity]);
            }
        }
    }

    // Calculate amount to pay (deposit or full)
    if ($request->payment_type === 'deposit') {
        $amountToPay = $totalPrice * 0.5;
    } else {
        $amountToPay = $totalPrice;
    }

    $booking->update([
        'total_price' => $totalPrice,
    ]);

    // Initiate Paystack payment
    $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->post(env('PAYSTACK_PAYMENT_URL') . '/transaction/initialize', [
        'email' => $booking->customer_email,
        'amount' => $amountToPay * 100, // In kobo
        'callback_url' => route('event_paystack.callback'),
        'metadata' => [
            'booking_id' => $booking->id,
            'payment_type' => $request->payment_type,
            'total_price' => $totalPrice,
            'amount_to_pay' => $amountToPay,
        ],
    ]);

    $data = $response->json();

    if (isset($data['data']['authorization_url'])) {
        return redirect($data['data']['authorization_url']);
    }

    return back()->with('error', 'Unable to initiate payment.');
}


    // Admin: List bookings
    public function index()
    {
        $eventBookings = EventBooking::with('packages')->latest()->get();
        return view('admin.event_bookings.index', compact('eventBookings'));
    }

    // Admin: Update status
    public function updateStatus(Request $request, EventBooking $eventBooking)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected,cancelled,completed',
        ]);

        $eventBooking->status = $request->status;
        $eventBooking->save();

        return back()->with('success', 'Event booking status updated.');
    }

    // Admin: Delete booking
    public function destroy(EventBooking $eventBooking)
    {
        $eventBooking->delete();
        return back()->with('success', 'Event booking deleted.');
    }

    public function handlePaystackCallback(Request $request)
{
    $reference = $request->query('reference');

    $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
        ->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference);

    $data = $response->json();

    if ($data['status'] && $data['data']['status'] == 'success') {
        $bookingId = $data['data']['metadata']['booking_id'];
        $booking = EventBooking::find($bookingId);

        if ($booking) {
            $booking->update([
                'payment_status' => 'paid',
                'paystack_reference' => $reference,
            ]);

            // Send confirmation email
    Mail::to($booking->customer_email)->send(new \App\Mail\EventBookingConfirmationMail($booking));
        }

        return redirect()->route('event_bookings.create')->with('success', 'Payment successful! Your event is confirmed.');
    }

    return redirect()->route('event_bookings.create')->with('error', 'Payment failed.');
}

}
