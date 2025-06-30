@extends('layouts.admin')



@section('content')
<div class="row">
    <div class="col-6">
        <h2>Edit Table Category</h2>
        <form action="{{ route('table-categories.update', $tableCategory) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $tableCategory->name) }}">
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
