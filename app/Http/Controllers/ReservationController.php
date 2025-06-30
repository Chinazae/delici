<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\TableCategory;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function browse(Request $request)
    {
        $categories = TableCategory::all();

        $tables = Table::query()->with('category');

        // Filter by capacity
        if ($request->filled('capacity')) {
            $tables=$tables->where('seating_capacity', '>=', $request->capacity);
        }

        // Filter by category
        if ($request->filled('category_id')) {
            $tables=$tables->where('table_category_id', $request->category_id);
        }

        // Filter by availability (optional)
        if ($request->filled('status')) {
           $tables= $tables->where('status', $request->status);
        }


//         if ($request->filled('check_in_date') && $request->filled('check_in_time') && $request->filled('duration')) {
//     $checkDate = $request->check_in_date;
//     $checkTime = $request->check_in_time;
//     $duration = $request->duration;

//     // Calculate end time for user's request
//     $requestedStart = $checkTime;
//     $requestedEnd = date('H:i:s', strtotime($checkTime) + ($duration * 3600));

//     $tables = $tables->whereDoesntHave('reservations', function($query) use ($checkDate, $requestedStart, $requestedEnd) {
//         $query->where('check_in_date', $checkDate)
//             ->where(function($q) use ($requestedStart, $requestedEnd) {
//                 $q->where(function($sub) use ($requestedStart, $requestedEnd) {
//                     $sub->whereTime('check_in_time', '<', $requestedEnd)
//                         ->whereRaw('ADDTIME(check_in_time, SEC_TO_TIME(duration * 3600)) > ?', [$requestedStart]);
//                 });
//             });
//     });
// }


if ($request->filled('check_in_date') && $request->filled('check_in_time') && $request->filled('duration')) {
    $checkDate = $request->check_in_date;
    $checkTime = $request->check_in_time;
    $duration = $request->duration;

    // Requested time range
    $requestedStart = $checkTime;
    $requestedEnd = date('H:i:s', strtotime($checkTime) + ($duration * 3600));

    $tables = $tables->whereDoesntHave('reservations', function($query) use ($checkDate, $requestedStart, $requestedEnd) {
        $query->where('check_in_date', $checkDate)
              ->where(function($q) use ($requestedStart, $requestedEnd) {
                  $q->where(function($sub) use ($requestedStart, $requestedEnd) {
                      $sub->whereTime('check_in_time', '<', $requestedEnd)
                          ->whereRaw('ADDTIME(check_in_time, SEC_TO_TIME(duration * 3600)) > ?', [$requestedStart]);
                  });
              });
    });
}


// if ($request->filled('default_date') && $request->filled('default_time') && $request->filled('default_duration')) {
//     $checkDate = $request->defaul_date;
//     $checkTime = $request->default_time;
//     $duration = $request->default_duration;

//     // Requested time range
//     $requestedStart = $checkTime;
//     $requestedEnd = date('H:i:s', strtotime($checkTime) + ($duration * 3600));

//     $tables = $tables->whereDoesntHave('reservations', function($query) use ($checkDate, $requestedStart, $requestedEnd) {
//         $query->where('default_date', $checkDate)
//               ->where(function($q) use ($requestedStart, $requestedEnd) {
//                   $q->where(function($sub) use ($requestedStart, $requestedEnd) {
//                       $sub->whereTime('default_time', '<', $requestedEnd)
//                           ->whereRaw('ADDTIME(default_time, SEC_TO_TIME(duration * 3600)) > ?', [$requestedStart]);
//                   });
//               });
//     });
// }




        $tables = $tables->get();

        $favouriteTableIds = auth()->check() ? auth()->user()->favourites->pluck('table_id')->toArray() : [];
return view('reservations.browse', compact('tables', 'categories', 'favouriteTableIds'));


        // return view('reservations.browse', compact('categories', 'tables'));
    }



public function create(Table $table)
{
    return view('reservations.create', compact('table'));
}

public function store(Request $request)
{
    $request->validate([
        'table_id' => 'required|exists:tables,id',
        'guest_name' => 'required|string|max:255',
        'guest_email' => 'required|email',
        'guest_phone' => 'nullable|string|max:20',
        'check_in_date' => 'required|date',
        'check_in_time' => 'required',
        'duration' => 'required|integer|min:1',
        'special_request' => 'nullable|string',
    ]);

    Reservation::create($request->all());

    return redirect()->route('reservations.browse')->with('success', 'Reservation made successfully!');
}

}
