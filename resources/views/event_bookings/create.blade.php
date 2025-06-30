@extends('layouts.app')

@section('title', 'Book an Event')

@section('content')
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>book an event</span></div>
            <h1><span>Event Booking</span></h1>
        </div>
    </div>
</section>

<div class="container py-4">
    <h2>Book Your Event</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('event_bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_name">Your Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="customer_email">Your Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="customer_phone">Your Phone</label>
            <input type="text" name="customer_phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="event_date">Event Date</label>
            <input type="date" name="event_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="event_time">Event Time</label>
            <input type="time" name="event_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="duration">Duration (hours)</label>
            <input type="number" name="duration" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="guests_count">Number of Guests</label>
            <input type="number" name="guests_count" class="form-control">
        </div>
        <div class="mb-3">
            <label for="special_requests">Special Requests</label>
            <textarea name="special_requests" class="form-control"></textarea>
        </div>

        <h4>Select Packages</h4>
        @foreach($packages as $package)
        <div class="form-check">
            <input type="checkbox" name="packages[{{ $package->id }}][selected]" value="1" class="form-check-input"
                id="package_{{ $package->id }}">
            <label class="form-check-label" for="package_{{ $package->id }}">
                <strong>{{ $package->name }}</strong> ({{ ucfirst($package->type) }}) - ₦{{
                number_format($package->price, 2) }}
            </label>
            <input type="number" name="packages[{{ $package->id }}][quantity]" value="1" min="1"
                class="form-control form-control-sm mt-1" placeholder="Quantity">
        </div>
        @endforeach

        <div class="mb-3">
            <label for="payment_type">Payment Type</label>
            <select name="payment_type" class="form-control" required>
                <option value="">Select Payment Type</option>
                <option value="full">Full Payment</option>
                <option value="deposit">Deposit (50%)</option>
            </select>
        </div>


        <button class="btn btn-primary mt-3">Submit Booking</button>
    </form>
</div>
@endsection
