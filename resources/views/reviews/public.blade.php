@extends('layouts.app')

@section('title', 'Customer Reviews')

@section('content')

<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>Customer Reviews</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt=""></div>
            <h1><span>What Our Customers Say</span></h1>
        </div>
    </div>
</section>

<div class="container py-4">
    <h2 class="mb-4 text-center">Latest Reviews</h2>

    @forelse($reviews as $review)
    <div class="card mb-3 shadow-sm bg-light text-dark rounded-3">
        <div class="card-body">
            <h5 class="card-title bg-light text-dark">{{ $review->reservation->table->table_number ?? 'N/A' }} Table
            </h5>
            <p><strong>Overall:</strong>
                <x-stars :rating="$review->overall_rating" />
            </p>
            <p><strong>Food:</strong>
                <x-stars :rating="$review->food_rating" />
            </p>
            <p><strong>Ambience:</strong>
                <x-stars :rating="$review->ambience_rating" />
            </p>
            <p><strong>Service:</strong>
                <x-stars :rating="$review->service_rating" />
            </p>
            @if($review->comments)
            <p class="text-muted"><em>"{{ $review->comments }}"</em></p>
            @endif
        </div>
    </div>
    @empty
    <p>No reviews yet. Be the first to review your experience!</p>
    @endforelse
</div>

@endsection
