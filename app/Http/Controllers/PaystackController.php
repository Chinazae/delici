<?php
namespace App\Http\Controllers;

use App\Mail\ReservationConfirmationMail;
use App\Models\Coupon;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PaystackController extends Controller
{
//     public function redirectToGateway(Request $request)
// {
//     $validated = $request->validate([
//         'guest_email' => 'required|email',
//         'guest_name' => 'required',
//         'guest_phone' => 'nullable',
//         'payment_type' => 'required|in:full,deposit',
//     ]);

//     $cart = session('reservation_cart', []);

//     $totalAmount = collect($cart)->sum('total_price');



// $coupon = null;
// $discountAmount = 0;

// if ($request->filled('coupon_code')) {
//     $coupon = Coupon::where('code', $request->coupon_code)->first();
//     if ($coupon && $coupon->isValid()) {
//         $totalAmount = collect($cart)->sum('total_price');

//         $discountAmount = ($coupon->type == 'percentage')
//             ? ($totalAmount * ($coupon->value / 100))
//             : $coupon->value;

//         $coupon->increment('used_count');
//     }
// }

// $amountToPay = $totalAmount - $discountAmount;


//     if ($request->payment_type === 'deposit') {
//         $amountToPay = $totalAmount * 0.5;
//     } else {
//         $amountToPay = $totalAmount;
//     }

//     $amountToPayInKobo = $amountToPay * 100;

//     $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
//         ->post(env('PAYSTACK_PAYMENT_URL') . '/transaction/initialize', [
//             'email' => $validated['guest_email'],

//             'amount' => $amountToPayInKobo,
//             'callback_url' => route('paystack.callback'),
//             'metadata' => [
//                 'guest_name' => $validated['guest_name'],
//                 'guest_email' => $validated['guest_email'],
//                 'guest_phone' => $validated['guest_phone'],
//                 'payment_type' => $validated['payment_type'],
//                 'coupon_code' => $request->coupon_code,
//                 'discount_amount' => $discountAmount,
//                 'cart' => $cart,
//             ],
//         ]);

//         // dd($response->json());


//     $data = $response->json();

//     if (isset($data['data']['authorization_url'])) {
//         return redirect($data['data']['authorization_url']);
//     }

//     return back()->with('error', 'Unable to initiate payment.');
// }


//     public function handleGatewayCallback(Request $request)

// {
//     $reference = $request->query('reference');

//     $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
//         ->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference);

//     $data = $response->json();

//     if ($data['status'] && $data['data']['status'] == 'success') {
//         $metadata = $data['data']['metadata'];
//         $cart = $metadata['cart'];
//         $paymentType = $metadata['payment_type'];

//         foreach ($cart as $item) {
//             Reservation::create([
//                 'table_id' => $item['table_id'],
//                 'guest_name' => $metadata['guest_name'],
//                 'guest_email' => $data['data']['customer']['email'],
//                 'guest_phone' => $metadata['guest_phone'],
//                 'check_in_date' => $item['check_in_date'],
//                 'check_in_time' => $item['check_in_time'],
//                 'duration' => $item['duration'],
//                 'special_request' => $item['special_request'],
//                 'payment_status' => 'paid',
//                 'payment_type' => $paymentType,
//             ]);
//         }

//         Mail::to($metadata['guest_email'])->send(new ReservationConfirmationMail($metadata, $cart, $paymentType));

//         session()->forget('reservation_cart');

//         return redirect()->route('reservations.browse')->with('success', 'Payment successful! Your reservation is confirmed.');
//     }

//     return redirect()->route('cart.view')->with('error', 'Payment failed.');
// }




public function redirectToGateway(Request $request)
{
    $validated = $request->validate([
        'guest_email' => 'required|email',
        'guest_name' => 'required|string',
        'guest_phone' => 'nullable|string',
        'payment_type' => 'required|in:full,deposit',
        'coupon_code' => 'nullable|string',
    ]);

    $cart = session('reservation_cart', []);
    $totalAmount = collect($cart)->sum('total_price');

    $coupon = null;
    $discountAmount = 0;

    if ($request->filled('coupon_code')) {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if ($coupon && $coupon->isValid()) {
            $discountAmount = ($coupon->type == 'percentage')
                ? ($totalAmount * ($coupon->value / 100))
                : $coupon->value;

            $coupon->increment('used_count');
        }
    }

    $discountedAmount = $totalAmount - $discountAmount;

    if ($request->payment_type === 'deposit') {
        $amountToPay = $discountedAmount * 0.5;
    } else {
        $amountToPay = $discountedAmount;
    }

    $amountToPayInKobo = $amountToPay * 100;

    $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
        ->post(env('PAYSTACK_PAYMENT_URL') . '/transaction/initialize', [
            'email' => $validated['guest_email'],
            'amount' => $amountToPayInKobo,
            'callback_url' => route('paystack.callback'),
            'metadata' => [
                'guest_name' => $validated['guest_name'],
                'guest_email' => $validated['guest_email'],
                'guest_phone' => $validated['guest_phone'],
                'payment_type' => $validated['payment_type'],
                'coupon_code' => $request->coupon_code,
                'discount_amount' => $discountAmount,
                'cart' => $cart,
            ],
        ]);

    $data = $response->json();

    if (isset($data['data']['authorization_url'])) {
        return redirect($data['data']['authorization_url']);
    }

    return back()->with('error', 'Unable to initiate payment.');
}


// public function handleGatewayCallback(Request $request)
// {
//     $reference = $request->query('reference');

//     $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
//         ->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference);

//     $data = $response->json();

//     if ($data['status'] && $data['data']['status'] == 'success') {
//         $metadata = $data['data']['metadata'];

//         // Extract metadata details
//         $guestName = $metadata['guest_name'] ?? '';
//         $guestEmail = $data['data']['customer']['email'] ?? '';
//         $guestPhone = $metadata['guest_phone'] ?? '';
//         $paymentType = $metadata['payment_type'] ?? 'full';
//         $couponCode = $metadata['coupon_code'] ?? null;
//         $discountAmount = $metadata['discount_amount'] ?? 0;
//         $cart = $metadata['cart'] ?? [];

//         // Create reservations from the cart
//         foreach ($cart as $item) {
//             Reservation::create([
//                 'table_id' => $item['table_id'],
//                 'guest_name' => $guestName,
//                 'guest_email' => $guestEmail,
//                 'guest_phone' => $guestPhone,
//                 'check_in_date' => $item['check_in_date'],
//                 'check_in_time' => $item['check_in_time'],
//                 'duration' => $item['duration'],
//                 'special_request' => $item['special_request'],
//                 'payment_status' => 'paid',
//                 'payment_type' => $paymentType,
//             ]);
//         }

//         // Send email confirmation with discount details
//         Mail::to($guestEmail)->send(new ReservationConfirmationMail(
//             $guestName,
//             $guestEmail,
//             $guestPhone,
//             $cart,
//             $paymentType,
//             $couponCode,
//             $discountAmount
//         ));

//         session()->forget('reservation_cart');

//         return redirect()->route('reservations.browse')->with('success', 'Payment successful! Your reservation is confirmed.');
//     }

//     return redirect()->route('cart.view')->with('error', 'Payment failed.');
// }



public function handleGatewayCallback(Request $request)
{
    $reference = $request->query('reference');

    $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
        ->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference);

    $data = $response->json();

    if ($data['status'] && $data['data']['status'] == 'success') {
        $metadata = $data['data']['metadata'];

        $guestName = $metadata['guest_name'] ?? '';
        $guestEmail = $metadata['guest_email'] ?? $data['data']['customer']['email'];
        $guestPhone = $metadata['guest_phone'] ?? '';
        $paymentType = $metadata['payment_type'] ?? 'full';
        $couponCode = $metadata['coupon_code'] ?? null;
        $discountAmount = $metadata['discount_amount'] ?? 0;
        $cart = $metadata['cart'] ?? [];

        foreach ($cart as $item) {
            Reservation::create([
                'table_id' => $item['table_id'],
                'guest_name' => $guestName,
                'guest_email' => $guestEmail,
                'guest_phone' => $guestPhone,
                'check_in_date' => $item['check_in_date'],
                'check_in_time' => $item['check_in_time'],
                'duration' => $item['duration'],
                'special_request' => $item['special_request'],
                'payment_status' => 'paid',
                'payment_type' => $paymentType,
            ]);

            $table = Table::find($item['table_id']);
            if ($table) {
                $table->released = false;
                $table->save();
            }
        }

        Mail::to($guestEmail)->send(new ReservationConfirmationMail(
            $guestName,
            $guestEmail,
            $guestPhone,
            $cart,
            $paymentType,
            $couponCode,
            $discountAmount
        ));

        session()->forget('reservation_cart');

        return redirect()->route('reservations.browse')->with('success', 'Payment successful! Your reservation is confirmed.');
    }

    return redirect()->route('cart.view')->with('error', 'Payment failed.');
}


}
