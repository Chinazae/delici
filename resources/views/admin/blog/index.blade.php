@extends('layouts.admin')

@section('title', 'Manage Blog Posts')

@section('content')
<div class="container py-4">
    <h2>Blog Posts</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <span class="badge {{ $post->is_published ? 'bg-success' : 'bg-secondary' }}">
                        {{ $post->is_published ? 'Published' : 'Draft' }}
                    </span>
                </td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>
                    <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
