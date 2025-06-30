@extends('layouts.app')

@section('title', 'Make a Reservation')

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
    <h2>Reserve Table: {{ $table->table_number }}</h2>

    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="table_id" value="{{ $table->id }}">

        <div class="mb-3">
            <label for="guest_name" class="form-label">Your Name</label>
            <input type="text" name="guest_name" class="form-control"
                value="{{ old('guest_name', auth()->check() ? auth()->user()->name : '') }}" required>
        </div>
        <div class="mb-3">
            <label for="guest_email" class="form-label">Your Email</label>
            <input type="email" name="guest_email" class="form-control"
                value="{{ old('guest_email', auth()->check() ? auth()->user()->email : '') }}" required>
        </div>
        <div class="mb-3">
            <label for="guest_phone" class="form-label">Phone Number</label>
            <input type="text" name="guest_phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="check_in_date" class="form-label">Reservation Date</label>
            <input type="date" name="check_in_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="check_in_time" class="form-label">Reservation Time</label>
            <input type="time" name="check_in_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (hours)</label>
            <input type="number" name="duration" class="form-control" value="1" required>
        </div>
        <div class="mb-3">
            <label for="special_request" class="form-label">Special Requests</label>
            <textarea name="special_request" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Confirm Reservation</button>
    </form>
</div>
@endsection