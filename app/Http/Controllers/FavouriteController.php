<?php
namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['table_id' => 'required|exists:tables,id']);

        Favourite::firstOrCreate([
            'user_id' => Auth::id(),
            'table_id' => $request->table_id,
        ]);

        return back()->with('success', 'Table added to your favourites!');
    }

    public function index()
    {
        $favourites = Favourite::with('table')->where('user_id', Auth::id())->get();
        return view('favourites.index', compact('favourites'));
    }

    public function destroy(Favourite $favourite)
    {
        $favourite->delete();
        return back()->with('success', 'Table removed from your favourites.');
    }
}
