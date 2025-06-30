@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>Reservations Management</h2>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-2">
            <input type="text" name="guest_name" class="form-control" placeholder="Customer name"
                value="{{ request('guest_name') }}">
        </div>
        <div class="col-md-2">
            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
        </div>
        <div class="col-md-2">
            <select name="table_id" class="form-control">
                <option value="">-- Select Table --</option>
                @foreach($tables as $table)
                <option value="{{ $table->id }}" {{ request('table_id')==$table->id ? 'selected' : '' }}>{{
                    $table->table_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select name="status" class="form-control">
                <option value="">-- Status --</option>
                @foreach(['pending', 'confirmed', 'seated', 'completed', 'cancelled', 'no-show'] as $status)
                <option value="{{ $status }}" {{ request('status')==$status ? 'selected' : '' }}>{{ ucfirst($status) }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Filter</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Table</th>
                <th>Date</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->guest_name }}</td>
                <td>{{ $reservation->table->table_number ?? 'N/A' }}</td>
                <td>{{ $reservation->check_in_date }}</td>
                <td>{{ $reservation->check_in_time }}</td>
                <td>{{ $reservation->duration }} hrs</td>
                <td>{{ ucfirst($reservation->payment_status) }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.reservations.updateStatus', $reservation->id) }}">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="form-control form-control-sm d-inline w-auto">
                            @foreach(['pending', 'confirmed', 'seated', 'completed', 'cancelled', 'no-show'] as $status)
                            <option value="{{ $status }}" {{ $reservation->payment_status == $status ? 'selected' : ''
                                }}>{{ ucfirst($status) }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-success">Update</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete this reservation?')">Delete</button>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
