@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <H2 class="mb-3">{{ $post->title }}</H2>
            <p class="text-decoration-none mb-3">By: <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->Category->name }}</a>
            </p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" class="card-img-top img-fluid" alt="{{ $post->category->name}}">
            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>

            <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
        </div>
    </div>
</div>
@endsection