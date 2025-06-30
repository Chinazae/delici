@extends('layouts.app')

@section('title', 'Browse Tables')

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
    <h2 class="mb-4 text-center">Browse Tables</h2>

    <form method="GET" action="{{ route('reservations.browse') }}" class="row g-3 mb-4">
        <div class="col-md-3">
            <label for="capacity" class="form-label">Seating Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ request('capacity') }}">
        </div>
        <div class="col-md-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">--Select--</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id')==$category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="">--Select--</option>
                <option value="available" {{ request('status')=='available' ? 'selected' : '' }}>Available</option>
                <option value="reserved" {{ request('status')=='reserved' ? 'selected' : '' }}>Reserved</option>
                <option value="out_of_service" {{ request('status')=='out_of_service' ? 'selected' : '' }}>Out of
                    Service</option>
            </select>
        </div>
        <div class="col-md-3 d-flex align-items-end">
            <button class="btn btn-primary w-100">Filter</button>
        </div>
    </form>

    <div class="row">
        @forelse($tables as $table)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($table->image)
                <img src="{{ asset($table->image) }}" class="card-img-top" alt="Table Image"
                    style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">Table {{ $table->table_number }}</h5>
                    <p class="card-text">
                        <strong>Category:</strong> {{ $table->category->name }} <br>
                        <strong>Capacity:</strong> {{ $table->seating_capacity }} <br>
                        <strong>Price per Hour:</strong> ₦{{ number_format($table->price, 2) }}
                    </p>
                    <p>
                        <strong>Status:</strong>
                        @if($table->status == 'available')
                        <span class="badge bg-success">Available</span>
                        @elseif($table->status == 'reserved')
                        <span class="badge bg-warning text-dark">Reserved</span>
                        @else
                        <span class="badge bg-danger">Out of Service</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @empty
        <p>No tables found.</p>
        <!-- Join Waitlist Button (if no available tables) -->
        <div class="text-center my-4">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#waitlistModal">Join
                Waitlist</button>
        </div>

        <!-- Waitlist Modal Form -->
        <div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('waitlist.store') }}" method="POST" class="modal-content">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="waitlistModalLabel">Join Waitlist</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Desired Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Any</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Desired Capacity</label>
                            <input type="number" name="seating_capacity" class="form-control" placeholder="e.g., 4">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="auto_book" value="1" class="form-check-input"
                                id="autoBookCheck">
                            <label class="form-check-label" for="autoBookCheck">Auto-book when available</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Join Waitlist</button>
                    </div>
                </form>
            </div>
        </div>

        @endforelse
    </div>
</div>

@endsection
