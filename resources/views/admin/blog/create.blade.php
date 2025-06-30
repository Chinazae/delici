@extends('layouts.admin')

@section('title', 'Create Blog Post')

@section('content')
<div class="container py-4">
    <h2>Create Blog Post</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="is_published" class="form-check-input" id="publish">
            <label for="publish" class="form-check-label">Publish Now</label>
        </div>
        <button class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
