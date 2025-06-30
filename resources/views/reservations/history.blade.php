@extends('layouts.app')

@section('title', 'My Reservations')

@section('content')

<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>reservations</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Reservation History</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->




<div class="container py-4">
    <h2>Your Reservations</h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- <form method="GET" action="{{ route('reservations.history') }}" class="mb-4">
        <label for="email">Enter your email to view reservations:</label>
        <input type="email" name="email" value="{{ $email }}" class="form-control w-50 d-inline-block" required>
        <button class="btn btn-primary">View</button>
    </form> --}}

    @if(!auth()->check())
    <form method="GET" action="{{ route('reservations.history') }}" class="mb-4">
        <label for="email">Enter your email to view reservations:</label>
        <input type="email" name="email" value="{{ $email }}" class="form-control w-50 d-inline-block" required>
        <button class="btn btn-primary">View</button>
    </form>
    @else
    <p>Showing reservations for <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->email }})</p>
    @endif


    @if($reservations->count() > 0)
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>Table</th>
                <th>Date</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->table->table_number }} ({{ $reservation->table->category->name }})</td>
                <td>{{ $reservation->check_in_date }}</td>
                <td>{{ $reservation->check_in_time }}</td>
                <td>{{ $reservation->duration }} hrs</td>
                <td>{{ ucfirst($reservation->payment_status) }}</td>
                <td>
                    @if($reservation->payment_status == 'paid')
                    <form action="{{ route('reservations.cancel', $reservation->id) }}" method="POST"
                        style="display:inline-block">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-danger">Cancel</button>
                    </form>

                    <a href="{{ route('reservations.edit', $reservation->id) }}"
                        class="btn btn-sm btn-warning">Reschedule</a>
                    @else
                    <span>-</span>
                    @endif
                </td>
            </tr>

            @if($reservation->payment_status == 'completed' && !$reservation->review)
            <tr>
                <td colspan="6">
                    <h5>Leave a Review</h5>
                    <form action="{{ route('reviews.store', $reservation) }}" method="POST" class="row g-2">
                        @csrf
                        <div class="col-md-2">
                            <label>Overall</label>
                            <select name="overall_rating" class="form-control" required>
                                <option value="">Select</option>
                                @for($i=1; $i<=5; $i++) {{--<option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : ''
                                    }}
                                    </option>--}}

                                    <option value="{{ $i }}">
                                        {{ str_repeat('★', $i) }}
                                    </option>

                                    @endfor
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Food</label>
                            <select name="food_rating" class="form-control">
                                <option value="">Select</option>
                                @for($i=1; $i<=5; $i++) {{--<option value="{{ $i }}">{{ $i }}</option>--}}
                                    <option value="{{ $i }}">
                                        {{ str_repeat('★', $i) }}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Ambience</label>
                            <select name="ambience_rating" class="form-control">
                                <option value="">Select</option>
                                @for($i=1; $i<=5; $i++) {{--<option value="{{ $i }}">{{ $i }}</option>--}}
                                    <option value="{{ $i }}">
                                        {{ str_repeat('★', $i) }}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Service</label>
                            <select name="service_rating" class="form-control">
                                <option value="">Select</option>
                                @for($i=1; $i<=5; $i++) {{--<option value="{{ $i }}">{{ $i }}</option>--}}
                                    <option value="{{ $i }}">
                                        {{ str_repeat('★', $i) }}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Comments</label>
                            <input type="text" name="comments" class="form-control">
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endif


            @endforeach
        </tbody>
    </table>
    @else
    <p>No reservations found.</p>
    @endif
</div>
@endsection