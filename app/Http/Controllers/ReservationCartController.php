<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Reservation;

class ReservationCartController extends Controller
{
    public function add(Request $request)
    {
        $table = Table::findOrFail($request->table_id);

        $cart = session()->get('reservation_cart', []);

        $cart[] = [
            'table_id' => $table->id,
            'table_number' => $table->table_number,
            'category' => $table->category->name,
            'check_in_date' => $request->check_in_date,
            'check_in_time' => $request->check_in_time,
            'duration' => $request->duration,
            'special_request' => $request->special_request,
            'price_per_hour' => $table->price,
            'total_price' => $table->price * $request->duration,
        ];

        session(['reservation_cart' => $cart]);

        return redirect()->route('cart.view')->with('success', 'Table added to cart!');
    }

    public function view()
    {
        $cart = session('reservation_cart', []);
        return view('reservations.cart', compact('cart'));
    }

    public function remove(Request $request)
    {
        $cart = session('reservation_cart', []);
        unset($cart[$request->index]);
        session(['reservation_cart' => array_values($cart)]);

        return redirect()->route('cart.view')->with('success', 'Item removed!');
    }

    public function checkout(Request $request)
{
    $cart = session('reservation_cart', []);

    foreach ($cart as $item) {
        Reservation::create([
            'table_id' => $item['table_id'],
            'guest_name' => $request->guest_name,
            'guest_email' => $request->guest_email,
            'guest_phone' => $request->guest_phone,
            'check_in_date' => $item['check_in_date'],
            'check_in_time' => $item['check_in_time'],
            'duration' => $item['duration'],
            'special_request' => $item['special_request'],
            // Add payment_method if you want to store it:
            // 'payment_method' => $request->payment_method,
        ]);
    }

    session()->forget('reservation_cart');

    return redirect()->route('reservations.browse')->with('success', 'Reservation confirmed!');
}


    public function update(Request $request)
{
    $cart = session('reservation_cart', []);

    $index = $request->index;
    if (isset($cart[$index])) {
        $cart[$index]['check_in_date'] = $request->check_in_date;
        $cart[$index]['check_in_time'] = $request->check_in_time;
        $cart[$index]['duration'] = $request->duration;
        $cart[$index]['special_request'] = $request->special_request;
    }

    session(['reservation_cart' => $cart]);

    return redirect()->route('cart.view')->with('success', 'Cart item updated!');
}

}
