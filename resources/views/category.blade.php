@extends('layouts.main')


@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <H2>
                <a href="/post/{{ $post->slug }}">{{ $post['title'] }}</a>
            </H2>
            <h5>By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
