@extends('layouts.admin')

@section('title', 'Manage Event Bookings')

@section('content')
<div class="container py-4">
    <h2>Event Bookings</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date & Time</th>
                <th>Guests</th>
                <th>Status</th>
                <th>Payment</th>
                <th>Packages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventBookings as $booking)
            <tr>
                <td>{{ $booking->customer_name }}</td>
                <td>{{ $booking->customer_email }}</td>
                <td>{{ $booking->customer_phone }}</td>
                <td>{{ $booking->event_date }} at {{ $booking->event_time }}</td>
                <td>{{ $booking->guests_count }}</td>
                <td>
                    <form action="{{ route('admin.event_bookings.updateStatus', $booking) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()">
                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="approved" {{ $booking->status == 'approved' ? 'selected' : '' }}>Approved
                            </option>
                            <option value="rejected" {{ $booking->status == 'rejected' ? 'selected' : '' }}>Rejected
                            </option>
                            <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled
                            </option>
                            <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Completed
                            </option>
                        </select>
                    </form>
                </td>
                <td>
                    <strong>Status:</strong> {{ ucfirst($booking->payment_status) }}<br>
                    <strong>Type:</strong> {{ ucfirst($booking->payment_type) }}<br>
                    <strong>Total:</strong> ₦{{ number_format($booking->total_price, 2) }}
                </td>

                <td>
                    @foreach($booking->packages as $package)
                    {{ $package->name }} (x{{ $package->pivot->quantity }})<br>
                    @endforeach
                </td>
                <td>
                    <form action="{{ route('admin.event_bookings.destroy', $booking) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
