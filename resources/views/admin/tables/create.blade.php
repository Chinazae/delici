@extends('layouts.admin')

@section('title', 'Add Table')

@section('content')
<div class="row">
    <div class="col-6">
        <h2>Add Table</h2>
        <form action="{{ route('tables.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Table Number</label>
                <input type="text" name="table_number" class="form-control">
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="table_category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Seating Capacity</label>
                <input type="number" name="seating_capacity" class="form-control">
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
                    <option value="out_of_service">Out of Service</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image">Table Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price">Price (₦ per hour)</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="default_date">Default Available Date</label>
                <input type="date" name="default_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="default_time">Default Time</label>
                <input type="time" name="default_time" class="form-control">
            </div>
            <div class="mb-3">
                <label for="default_duration">Default Duration (hours)</label>
                <input type="number" name="default_duration" class="form-control" value="1">
            </div>

            <button class="btn btn-success">Add</button>
        </form>
    </div>
</div>
@endsection
