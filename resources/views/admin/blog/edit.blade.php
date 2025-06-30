@extends('layouts.admin')

@section('title', 'Edit Blog Post')

@section('content')
<div class="container py-4">
    <h2>Edit Blog Post</h2>

    <form action="{{ route('admin.blog.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $blogPost->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $blogPost->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @if($blogPost->image)
            <img src="{{ asset('storage/' . $blogPost->image) }}" alt="Blog Image" width="150" class="mt-2">
            @endif
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="is_published" class="form-check-input" id="publish" {{ $blogPost->is_published
            ? 'checked' : '' }}>
            <label for="publish" class="form-check-label">Publish Now</label>
        </div>
        <button class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
