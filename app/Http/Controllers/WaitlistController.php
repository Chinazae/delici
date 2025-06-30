<?php
namespace App\Http\Controllers;

use App\Models\Waitlist;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'category_id' => 'nullable|exists:table_categories,id',
            'seating_capacity' => 'nullable|integer',
            'auto_book' => 'nullable|boolean',
        ]);

        Waitlist::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'category_id' => $request->category_id,
            'seating_capacity' => $request->seating_capacity,
            'auto_book' => $request->has('auto_book'),
            'status' => 'waiting',
        ]);

        return back()->with('success', 'You have been added to the waitlist! We’ll notify you when a table becomes available.');
    }
}
