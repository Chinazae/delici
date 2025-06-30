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


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4 text-center">Browse Tables</h2>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif


            <form method="GET" action="{{ route('reservations.browse') }}" class="row g-3 mb-4">
                <div class="col-md-3">
                    <label for="capacity" class="form-label">Seating Capacity</label>
                    <input type="number" name="capacity" id="capacity" class="form-control"
                        value="{{ request('capacity') }}">
                </div>
                <div class="col-md-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">--Select--</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id')==$category->id ? 'selected' : ''
                            }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="col-md-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">--Select--</option>
                        <option value="available" {{ request('status')=='available' ? 'selected' : '' }}>Available
                        </option>
                        <option value="reserved" {{ request('status')=='reserved' ? 'selected' : '' }}>Reserved</option>
                        <option value="out_of_service" {{ request('status')=='out_of_service' ? 'selected' : '' }}>Out
                            of Service</option>
                    </select>
                </div> --}}
                <div class="col-md-2">
                    <label for="check_in_date" class="form-label">Date</label>
                    <input type="date" name="check_in_date" id="check_in_date" class="form-control"
                        value="{{ request('check_in_date') }}">
                </div>
                <div class="col-md-2">
                    <label for="check_in_time" class="form-label">Time</label>
                    <input type="time" name="check_in_time" id="check_in_time" class="form-control"
                        value="{{ request('check_in_time') }}">
                </div>
                {{-- <div class="col-md-2">
                    <label for="duration" class="form-label">Duration (hrs)</label>
                    <input type="number" name="duration" id="duration" class="form-control"
                        value="{{ request('duration') }}">
                </div> --}}

                {{-- <div class="col-md-2">
                    <label for="default_date" class="form-label">Date</label>
                    <input type="date" name="default_date" id="default_date" class="form-control"
                        value="{{ request('default_date') }}">
                </div>
                <div class="col-md-2">
                    <label for="default_time" class="form-label">Time</label>
                    <input type="time" name="default_time" id="default_time" class="form-control"
                        value="{{ request('default_time') }}">
                </div>
                <div class="col-md-2">
                    <label for="default_duration" class="form-label">Duration (hrs)</label>
                    <input type="number" name="default_duration" id="default_duration" class="form-control"
                        value="{{ request('default_duration') }}">
                </div> --}}
                <div class="col-md-3 d-flex align-items-end mt-3">
                    <button class="btn btn-primary w-100">Filter</button>
                </div>
            </form>

            <div class="text-center mb-4">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#waitlistModal">
                    Can't find a table? Join the Waitlist
                </button>
            </div>


            {{-- <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Image</th>
                                <th>Table Number</th>
                                <th>Category</th>
                                <th>Capacity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tables as $table)
                            <tr>
                                <td>
                                    @if($table->image)
                                    <img src="{{ asset($table->image) }}" alt="Table Image" width="80" height="60"
                                        style="object-fit: cover; border-radius: 5px;">
                                    @else
                                    <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $table->table_number }}</td>
                                <td>{{ $table->category->name }}</td>
                                <td>{{ $table->seating_capacity }}</td>
                                <td>
                                    <span class="badge
                                            @if($table->status == 'available') bg-success
                                            @elseif($table->status == 'reserved') bg-warning
                                            @else bg-danger @endif">
                                        {{ ucfirst(str_replace('_', ' ', $table->status)) }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No tables found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{--
            </div> --}} {{--commented before --}}

            <div class="row">
                @forelse($tables as $table)
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm bg-light text-dark rounded-3">

                        @if($table->image)
                        <img src="{{ asset($table->image) }}" alt="Table Image" class="card-img-top"
                            style="height: 200px; object-fit: cover;">
                        @else
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="No Image" class="card-img-top"
                            style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $table->table_number }}</h5>
                            <p class="card-text mb-1">
                                <strong>Category:</strong> {{ $table->category->name }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Capacity:</strong> {{ $table->seating_capacity }} people
                            </p>
                            <p class="card-text mb-1">
                                <strong>Status:</strong>
                                <span class="badge
                            @if($table->status == 'available') bg-success
                            @elseif($table->status == 'reserved') bg-warning
                            @else bg-danger @endif">
                                    {{ ucfirst(str_replace('_', ' ', $table->status)) }}
                                </span>
                            </p>
                            <p class="card-text mb-1"><strong>Price:</strong> ₦{{ number_format($table->price, 2) }} per
                                hour</p>


                            {{-- <p class="card-text mb-1"><strong>Default Date:</strong> {{ $table->default_date ?? '-'
                                }}
                            </p>
                            <p class="card-text mb-1"><strong>Default Time:</strong> {{ $table->default_time ?? '-' }}
                            </p>
                            <p class="card-text mb-1"><strong>Default Duration:</strong> {{ $table->default_duration ??
                                '-' }} hrs</p> --}} {{--commented before --}}
                            <a href="{{ route('reservations.create', $table) }}" class="btn btn-primary mt-3">Reserve
                                Now</a>


                            @if(Auth::check())
                            @php
                            $favourite = Auth::user()->favourites->where('table_id', $table->id)->first();
                            @endphp

                            @if($favourite)
                            <form action="{{ route('favourites.destroy', $favourite) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-3" style="color: red;">
                                    <i class="bi bi-heart-fill"></i> <!-- Filled heart -->
                                </button>
                            </form>
                            @else
                            <form action="{{ route('favourites.store') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="table_id" value="{{ $table->id }}">
                                <button type="submit" class="btn btn-link p-3" style="color: gray;">
                                    <i class="bi bi-heart"></i> <!-- Empty heart -->
                                </button>
                            </form>
                            @endif
                            @else
                            <a href="{{ route('login') }}" class="btn btn-link p-3" style="color: gray;">
                                <i class="bi bi-heart"></i>
                            </a>
                            @endif


                            {{-- @if(Auth::check())
                            <form action="{{ route('favourites.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="table_id" value="{{ $table->id }}">
                                <button type="submit" class="btn btn-outline-danger btn-sm mt-2">
                                    <i class="bi bi-heart"></i> Save to Favourites
                                </button>
                            </form>
                            @endif --}}

                            {{-- @if(Auth::check())
                            @if(in_array($table->id, $favouriteTableIds))
                            <form
                                action="{{ route('favourites.destroy', auth()->user()->favourites->where('table_id', $table->id)->first()->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-2">
                                    <i class="bi bi-heart-fill"></i> Remove from Favourites
                                </button>
                            </form>
                            @else
                            <form action="{{ route('favourites.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="table_id" value="{{ $table->id }}">
                                <button type="submit" class="btn btn-outline-danger btn-sm mt-2">
                                    <i class="bi bi-heart"></i> Save to Favourites
                                </button>
                            </form>
                            @endif
                            @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm mt-2">
                                <i class="bi bi-heart"></i> Login to save
                            </a>
                            @endif --}}



                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info">No tables found.</div>
                </div>
                @endforelse
            </div>


        </div>
    </div>
</div>
<!-- Waitlist Modal -->
<div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('waitlist.store') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="waitlistModalLabel">Join the Waitlist</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Your Phone (Optional)</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                {{-- <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Your Phone">
                </div> --}}

                <div class="mb-3">
                    <label for="category_id" class="form-label">Preferred Table Type</label>
                    <select name="category_id" class="form-control">
                        <option value="">Any</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="seating_capacity" class="form-label">Preferred Capacity</label>
                    <input type="number" name="seating_capacity" class="form-control" placeholder="e.g., 4">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="auto_book" value="1" class="form-check-input" id="autoBookCheck">
                    <label class="form-check-label" for="autoBookCheck">Auto-book when available</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Join Waitlist</button>
            </div>
        </form>
    </div>
</div>

@endsection