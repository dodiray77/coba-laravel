@extends('layouts.main')


@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" name="search" id="" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary" id="">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3 text-center">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name}}" class="card-img-top" alt="{{ $posts[0]->category->name}}">
    <div class="card-body">
        <h3 class="card-title"><a href="" class=" text-dark text-decoration-none">{{$posts[0]->title}}</a></h3>
        <p>
            <small class="text-muted">By: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name}}</a> in
                <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
        <p class="card-text"><small class="text-muted">Last Update {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 ph-2 text-white" style="background-color: rgba(0, 0, 0, 0.5);"><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name}}" class="card-img-top" alt="{{ $post->category->name}}">
                <div class="card-body">
                    <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a></h5>
                    <p>
                        <small class="text-muted">By: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name}}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justifiy-content-center">
    {{ $posts->links() }}
</div>

@endsection