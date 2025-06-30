@extends('layouts.app')

@section('title', 'Your Reservation Cart')

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
    <h2>Reservation Cart</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
    <table class="table table-striped table-bordered table-light">
        <thead>
            <tr>
                <th>Table Number</th>
                <th>Category</th>
                <th>Date</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Request</th>
                <th>Price per Hour</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $index => $item)
            <tr>
                <td>{{ $item['table_number'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>
                    <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                        @csrf
                        <input type="hidden" name="index" value="{{ $index }}">
                        <input type="date" name="check_in_date" class="form-control form-control-sm"
                            value="{{ $item['check_in_date'] }}">
                </td>
                <td>
                    <input type="time" name="check_in_time" class="form-control form-control-sm"
                        value="{{ $item['check_in_time'] }}">
                </td>
                <td>
                    <input type="number" name="duration" class="form-control form-control-sm"
                        value="{{ $item['duration'] }}">
                </td>
                <td>
                    <input type="text" name="special_request" class="form-control form-control-sm"
                        value="{{ $item['special_request'] }}">
                </td>
                <td>₦{{ number_format($item['price_per_hour'], 2) }}</td>
                <td>₦{{ number_format($item['total_price'], 2) }}</td>
                <td class="d-flex">
                    <button class="btn btn-sm btn-info me-1">Update</button>
                    </form>

                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="index" value="{{ $index }}">
                        <button class="btn btn-sm btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <h4>Guest Details</h4>
    <form action="{{ route('paystack.pay') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="guest_name">Your Name</label>
            <input type="text" name="guest_name" class="form-control"
                value="{{ old('guest_name', auth()->check() ? auth()->user()->name : '') }}" required>
        </div>
        <div class="mb-3">
            <label for="guest_email">Your Email</label>
            <input type="email" name="guest_email" class="form-control"
                value="{{ old('guest_email', auth()->check() ? auth()->user()->email : '') }}" required>
        </div>
        <div class="mb-3">
            <label for="guest_phone">Your Phone</label>
            <input type="text" name="guest_phone" class="form-control"
                value="{{ old('guest_phone', auth()->check() ? auth()->user()->phone ?? '' : '') }}">
        </div>
        <div class="mb-3">
            <label for="payment_type">Payment Type</label>
            <select name="payment_type" class="form-control" required>
                <option value="full">Full Payment</option>
                <option value="deposit">Deposit (50%)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="coupon_code">Apply Coupon Code</label>
            <input type="text" name="coupon_code" class="form-control" placeholder="e.g., DINNER20">
        </div>
        <input type="hidden" name="amount" value="{{ collect($cart)->sum('total_price') }}">


        <button class="btn btn-success">Pay with Paystack</button>
    </form>


    @else
    <p>No items in cart.</p>
    @endif
</div>
@endsection