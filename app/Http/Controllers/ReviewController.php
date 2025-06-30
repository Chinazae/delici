<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Reservation $reservation)
    {
        $request->validate([
            'overall_rating' => 'required|integer|min:1|max:5',
            'food_rating' => 'nullable|integer|min:1|max:5',
            'ambience_rating' => 'nullable|integer|min:1|max:5',
            'service_rating' => 'nullable|integer|min:1|max:5',
            'comments' => 'nullable|string|max:500',
        ]);

        if ($reservation->review) {
            return back()->with('error', 'You have already reviewed this reservation.');
        }

        Review::create([
            'reservation_id' => $reservation->id,
            'user_id' => Auth::id(),
            'overall_rating' => $request->overall_rating,
            'food_rating' => $request->food_rating,
            'ambience_rating' => $request->ambience_rating,
            'service_rating' => $request->service_rating,
            'comments' => $request->comments,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Your review has been submitted for approval.');
    }

    public function index()
    {
        $reviews = Review::with('reservation.table', 'user')->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function updateStatus(Request $request, Review $review)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $review->status = $request->status;
        $review->save();

        return back()->with('success', 'Review status updated.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted.');
    }

    public function publicIndex()
{
    $reviews = Review::where('status', 'approved')->with('reservation.table')->latest()->get();
    return view('reviews.public', compact('reviews'));
}

}
