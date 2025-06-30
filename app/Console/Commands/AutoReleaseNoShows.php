<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Waitlist;
use App\Mail\WaitlistNotificationMail;
use Illuminate\Support\Facades\Mail;

class AutoReleaseNoShows extends Command
{
    protected $signature = 'reservations:auto-release';
    protected $description = 'Automatically release tables for no-shows and handle waitlist';

    public function handle()
    {
        // Find reservations marked as 'pending' or 'confirmed' that are past their check-in time + grace period
        $reservations = Reservation::whereIn('payment_status', ['pending', 'confirmed'])
            ->where('check_in_date', now()->toDateString())
            ->whereTime('check_in_time', '<=', now()->subMinutes(30)->format('H:i')) // 30 min grace period
            ->get();

        foreach ($reservations as $reservation) {
            $reservation->payment_status = 'no-show';
            $reservation->save();

            $table = $reservation->table;
            $table->status = 'available';
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
        }

        $this->info('Auto-release of no-shows and waitlist notifications completed.');
    }
}
