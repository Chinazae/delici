<?php

namespace App\Http\Controllers;

use App\Models\EventBooking;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function admin_dashboard()
    {
        //return view('admin.index');


    $dailyReservations = Reservation::whereDate('created_at', today())->count();
    $weeklyReservations = Reservation::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    //$revenue = Reservation::where('payment_status', 'paid')->sum('total_price');

    $reservations = Reservation::where('payment_status', 'paid')->get();
$revenue = $reservations->sum(function($reservation) {
    return optional($reservation->table)->price * $reservation->duration;

});

$eventRevenue = EventBooking::where('payment_status', 'paid')->sum('total_price');
$totalRevenue = $revenue + $eventRevenue;





    $successRate = Reservation::where('payment_status', 'paid')->count() /
                   max(Reservation::count(), 1) * 100;

    $peakTimeData = Reservation::select(DB::raw('HOUR(check_in_time) as hour'), DB::raw('COUNT(*) as total'))
                    ->groupBy('hour')
                    ->orderBy('hour')
                    ->get();

    $topCustomers = Reservation::select('guest_email', DB::raw('COUNT(*) as total'))
                    ->groupBy('guest_email')
                    ->orderByDesc('total')
                    ->take(5)
                    ->get();

    // $usersCount = User::where('role_as', 'user')->count();
    // $staffCount = User::where('role_as', 'admin')->count();

    $usersCount = User::where('role_as', 0)->count(); // Customers
$staffCount = User::where('role_as', 1)->count(); // Admins/Staff


    return view('admin.index', compact(
        'dailyReservations', 'weeklyReservations', 'revenue',
        'successRate', 'peakTimeData', 'topCustomers',
        'usersCount', 'staffCount'
    ));
}


    public function userList(){
        $users=User::with('profile')->where('role_as', 0)->latest()->paginate(10);
        return view('admin.user.userlist', compact('users'));

    }

    public function ban(User $user)
    {
$user->active=0;
$user->save();
return redirect()->back()->with('success','User has been banned');
    }
}
