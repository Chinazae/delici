@extends('layouts.app')

@section('title', 'Reschedule Reservation')

@section('content')

<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>reschedule</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Reschedule Reservation</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="container py-4">
    <h2>Reschedule Reservation</h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="check_in_date" value="{{ $reservation->check_in_date }}" class="form-control"
                required>
        </div>
        <div class="mb-3">
            <label>Time</label>
            <input type="time" name="check_in_time" value="{{ $reservation->check_in_time }}" class="form-control"
                required>
        </div>
        <div class="mb-3">
            <label>Duration (hours)</label>
            <input type="number" name="duration" value="{{ $reservation->duration }}" class="form-control" required>
        </div>

        <button class="btn btn-success">Update Reservation</button>
    </form>
</div>
@endsection
