<?php

namespace App\Console;

use App\Mail\WaitlistNotificationMail;
use App\Models\Reservation;
use App\Models\Waitlist;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
//     protected function schedule(Schedule $schedule)
// {
//     $schedule->call(function () {
//         $now = Carbon::now();

//         $expiredReservations = \App\Models\Reservation::where('payment_status', 'confirmed')
//             ->whereRaw("TIMESTAMP(check_in_date, check_in_time) < ?", [$now->subMinutes(30)])
//             ->get();

//         foreach ($expiredReservations as $reservation) {
//             $reservation->payment_status = 'no-show';
//             $reservation->save();

//             $reservation->table->update(['released' => true]);

//             // Optionally, send email to customer:
//             Mail::to($reservation->guest_email)->send(new \App\Mail\ReservationStatusUpdateMail($reservation));
//         }
//     })->everyMinute();
// }


protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        $now = \Carbon\Carbon::now();

        $expiredReservations = \App\Models\Reservation::where('payment_status', 'confirmed')
            ->whereRaw("TIMESTAMP(check_in_date, check_in_time) < ?", [$now->subMinutes(30)])
            ->get();

        foreach ($expiredReservations as $reservation) {
            $reservation->payment_status = 'no-show';
            $reservation->save();

            $table = $reservation->table;
            $table->status = 'available';
            $table->released = true; // Keep your released logic if you want it
            $table->save();

            // Waitlist Logic
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
                    Mail::to($entry->email)->send(new WaitlistNotificationMail($entry, $table));
                    $entry->status = 'notified';
                    $entry->save();
                }
            }

            // Send email to the original customer
            Mail::to($reservation->guest_email)->send(new \App\Mail\ReservationStatusUpdateMail($reservation));
        }
    })->everyMinute();
}



    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
