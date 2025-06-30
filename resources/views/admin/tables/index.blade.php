@extends('layouts.admin')



@section('content')
<div class="row">
    <div class="col-12">
        <h2>Tables</h2>
        <a href="{{ route('tables.create') }}" class="btn btn-primary mb-3">Add Table</a>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Table Number</th>
                        <th>Category</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Default Date</th>
                        <th>Default Time</th>
                        <th>Default Duration</th>
                        <th>Released</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($tables as $table)
                    <tr>
                        <td>
                            @if($table->image)
                            <img src="{{ asset($table->image) }}" width="60">
                            @else
                            <span>No Image</span>
                            @endif
                        </td>
                        <td>{{ $table->table_number }}</td>
                        <td>{{ $table->category->name }}</td>
                        <td>{{ $table->seating_capacity }}</td>
                        <td>{{ ucfirst(str_replace('_', ' ', $table->status)) }}</td>
                        <td>₦{{ number_format($table->price, 2) }}</td>
                        <td>{{ $table->default_date ?? '-' }}</td>
                        <td>{{ $table->default_time ?? '-' }}</td>
                        <td>{{ $table->default_duration ?? '-' }} hrs</td>
                        <td>
                            @if($table->released)
                            <span class="badge bg-success">Released</span>
                            @else
                            <span class="badge bg-secondary">Not Released</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('tables.edit', $table) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tables.destroy', $table) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete table?')">Delete</button>
                            </form>
                        </td>
                        <form method="POST" action="{{ route('admin.tables.release', $table->id) }}">
                            @csrf
                            @method('PATCH')
                            @if($table->released)
                            <button class="btn btn-sm btn-warning">Reset Release</button>
                            @endif
                        </form>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
