<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationHistoryController extends Controller
{
    // public function index(Request $request)
    // {
    //     $email = $request->query('email'); // We'll use guest email as identifier

    //     $reservations = Reservation::where('guest_email', $email)
    //         ->orderBy('check_in_date', 'desc')
    //         ->get();

    //     return view('reservations.history', compact('reservations', 'email'));
    // }

    public function index(Request $request)
{
    if (auth()->check()) {
        $email = auth()->user()->email;
    } else {
        $request->validate(['email' => 'required|email']);
        $email = $request->email;
    }

    $reservations = Reservation::with(['table.category', 'review'])
        ->where('guest_email', $email)
        ->latest()
        ->get();

    return view('reservations.history', compact('reservations', 'email'));
}




public function cancel($id)
{
    $reservation = Reservation::findOrFail($id);

    $reservationDateTime = Carbon::parse($reservation->check_in_date . ' ' . $reservation->check_in_time);
    $now = Carbon::now();

    if ($now->greaterThanOrEqualTo($reservationDateTime->subHours(24))) {
        return back()->with('error', 'You can no longer cancel this reservation. Cancellation is allowed only up to 24 hours before your check-in time.');
    }

    $reservation->payment_status = 'cancelled';
    $reservation->save();

    return back()->with('success', 'Reservation cancelled successfully.');
}


public function edit($id)
{
    $reservation = Reservation::findOrFail($id);
    return view('reservations.edit', compact('reservation'));
}



public function update(Request $request, $id)
{
    $reservation = Reservation::findOrFail($id);

    $reservationDateTime = Carbon::parse($reservation->check_in_date . ' ' . $reservation->check_in_time);
    $now = Carbon::now();

    if ($now->greaterThanOrEqualTo($reservationDateTime->subHours(24))) {
        return back()->with('error', 'You can no longer reschedule this reservation. Rescheduling is allowed only up to 24 hours before your check-in time.');
    }

    $request->validate([
        'check_in_date' => 'required|date',
        'check_in_time' => 'required',
        'duration' => 'required|numeric|min:1',
    ]);

    $reservation->update($request->only(['check_in_date', 'check_in_time', 'duration']));

    return redirect()->route('reservations.history', ['email' => $reservation->guest_email])
                     ->with('success', 'Reservation updated successfully.');
}



}
