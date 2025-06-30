<?php
namespace App\Http\Controllers;

use App\Mail\ReservationStatusUpdateMail;
use App\Mail\WaitlistNotificationMail;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Waitlist;
use Illuminate\Support\Facades\Mail;

class AdminReservationController extends Controller
{
    public function index(Request $request)
    {
        $query = Reservation::query()->with('table');

        if ($request->filled('status')) {
            $query->where('payment_status', $request->status);
        }

        if ($request->filled('date')) {
            $query->whereDate('check_in_date', $request->date);
        }

        if ($request->filled('table_id')) {
            $query->where('table_id', $request->table_id);
        }

        if ($request->filled('guest_name')) {
            $query->where('guest_name', 'like', '%' . $request->guest_name . '%');
        }

        $reservations = $query->latest()->get();
        $tables = Table::all();

        return view('admin.reservations.index', compact('reservations', 'tables'));
    }

//     public function updateStatus(Request $request, Reservation $reservation)
// {
//     $request->validate([
//         'status' => 'required|in:pending,confirmed,seated,completed,cancelled,no-show',
//     ]);

//     $reservation->payment_status = $request->status;
//     $reservation->save();




//     // Send Email
//     Mail::to($reservation->guest_email)->send(new ReservationStatusUpdateMail($reservation));

//     return back()->with('success', 'Reservation status updated and email sent!');
// }




public function updateStatus(Request $request, Reservation $reservation)
{
    $request->validate([
        'status' => 'required|in:pending,confirmed,seated,completed,cancelled,no-show',
    ]);

    $reservation->payment_status = $request->status;
    $reservation->save();

    // 🌿 Waitlist Logic: If table becomes available
    if (in_array($reservation->payment_status, ['cancelled', 'completed', 'no-show'])) {
        $table = $reservation->table;
        $table->status = 'available';
        $table->save();

        // Find matching waitlist users
        $waitlistEntries = Waitlist::where('status', 'waiting')
            ->where(function($query) use ($table) {
                $query->where('category_id', $table->category_id)
                      ->orWhereNull('category_id');
            })
            ->where(function($query) use ($table) {
                $query->where('seating_capacity', $table->seating_capacity)
                      ->orWhereNull('seating_capacity');
            })
            ->get();

        foreach ($waitlistEntries as $entry) {
            if ($entry->auto_book) {
                // Auto-book a reservation
                Reservation::create([
                    'table_id' => $table->id,
                    'guest_name' => $entry->name,
                    'guest_email' => $entry->email,
                    'guest_phone' => $entry->phone,
                    'check_in_date' => now()->toDateString(),
                    'check_in_time' => now()->format('H:i'),
                    'duration' => 2,
                    'special_request' => 'Auto-booked from waitlist',
                    'payment_status' => 'pending',
                    'payment_type' => 'full',
                ]);

                $entry->status = 'booked';
                $entry->save();
            } else {
                // Notify user by email
                Mail::to($entry->email)->send(new WaitlistNotificationMail($entry, $table));
                $entry->status = 'notified';
                $entry->save();
            }
        }
    }

    // ✅ Send reservation status update email to customer
    Mail::to($reservation->guest_email)->send(new ReservationStatusUpdateMail($reservation));

    return back()->with('success', 'Reservation status updated and email sent!');
}


public function resetRelease(Table $table)
{
    $table->update(['released' => false]);
    return back()->with('success', 'Table release status reset.');
}


public function destroy(Reservation $reservation)
{
    $reservation->delete();
    return back()->with('success', 'Reservation deleted successfully.');
}

}
