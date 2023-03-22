@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-10">
            <H2 class="mb-3">{{ $post->title }}</H2>
            <div class="mb-3">
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>
            </div>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" class="card-img-top img-fluid" alt="{{ $post->category->name}}">
            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>

            <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
        </div>
    </div>
</div>
@endsection