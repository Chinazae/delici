@extends('layouts.app')

@section('title', $blogPost->title)

@section('content')
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(assets/images/background/banner-image-4.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>blog post</span></div>
            <h1><span>{{ $blogPost->title }}</span></h1>
        </div>
    </div>
</section>

<div class="container py-4">
    <div class="card shadow-sm bg-light text-dark">
        @if($blogPost->image)
        <img src="{{ asset('storage/' . $blogPost->image) }}" class="card-img-top"
            style="height:300px; object-fit:cover;">
        @endif

        <div class="card-body">
            <h2 class="card-title text-dark">{{ $blogPost->title }}</h2>
            <p class="card-text text-dark">{!! nl2br(e($blogPost->content)) !!}</p>
        </div>
    </div>
</div>
@endsection
