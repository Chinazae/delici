@extends('layouts.app')

@section('title', 'Your Favourites')

@section('content')


<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>browse tables</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Tables</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->


<div class="container py-4">
    <h2>Your Favourite Tables</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($favourites->count())
    <div class="row">
        @foreach($favourites as $favourite)
        <div class="col-md-4 mb-4 bg-light text-dark rounded-3">
            <div class="card h-100">
                <img src="{{ asset($favourite->table->image) }}" class="card-img-top" alt="Table Image"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $favourite->table->table_number }}</h5>
                    <p class="card-text">{{ $favourite->table->category->name ?? 'No category' }}</p>
                    <p class="card-text">Capacity: {{ $favourite->table->seating_capacity }}</p>
                    <p class="card-text">Price: ₦{{ number_format($favourite->table->price, 2) }}</p>
                    <a href="{{ route('reservations.create', $favourite->table) }}" class="btn btn-primary">Reserve
                        Now</a>
                    <form action="{{ route('favourites.destroy', $favourite) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>You have no favourite tables yet. Start browsing and add some!</p>
    @endif
</div>
@endsection
