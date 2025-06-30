@extends('layouts.app')

@section('title', 'Blog & News')

@section('content')
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>blog & news</span></div>
            <h1><span>Latest Updates</span></h1>
        </div>
    </div>
</section>

<div class="container py-4">
    <h2>Our Latest Articles</h2>

    @if($posts->count())
    {{-- <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 bg-light text-dark">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                    style="height:200px; object-fit:cover;">
                @else
                <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top"
                    style="height:200px; object-fit:cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 bg-light text-dark shadow-sm">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                    style="height:200px; object-fit:cover;">
                @else
                <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top"
                    style="height:200px; object-fit:cover;">
                @endif

                <div class="card-body">
                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('blog.showSingle', $post) }}" class="btn btn-sm btn-primary mt-2">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @else
    <p>No blog posts available.</p>
    @endif
</div>
@endsection
