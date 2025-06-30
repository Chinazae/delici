@extends('layouts.admin')

@section('title', 'Edit Table')

@section('content')
<div class="row">
    <div class="col-6">
        <h2>Edit Table</h2>
        <form action="{{ route('tables.update', $table) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Table Number</label>
                <input type="text" name="table_number" class="form-control" value="{{ $table->table_number }}">
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="table_category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $table->table_category_id == $category->id ? 'selected' : ''
                        }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Seating Capacity</label>
                <input type="number" name="seating_capacity" class="form-control"
                    value="{{ $table->seating_capacity }}">
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="available" {{ $table->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="reserved" {{ $table->status == 'reserved' ? 'selected' : '' }}>Reserved</option>
                    <option value="out_of_service" {{ $table->status == 'out_of_service' ? 'selected' : '' }}>Out of
                        Service</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image">Table Image (optional)</label>
                <input type="file" name="image" class="form-control">
                @if($table->image)
                <p class="mt-2"><strong>Current Image:</strong></p>
                <img src="{{ asset($table->image) }}" width="100">
                @endif
            </div>

            <div class="mb-3">
                <label for="price">Price (₦ per hour)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $table->price }}">
            </div>


            <div class="mb-3">
                <label for="default_date">Default Available Date</label>
                <input type="date" name="default_date" class="form-control" value="{{ $table->default_date }}">
            </div>
            <div class="mb-3">
                <label for="default_time">Default Time</label>
                <input type="time" name="default_time" class="form-control" value="{{ $table->default_time }}">
            </div>
            <div class="mb-3">
                <label for="default_duration">Default Duration (hours)</label>
                <input type="number" name="default_duration" class="form-control"
                    value="{{ $table->default_duration }}">
            </div>


            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
