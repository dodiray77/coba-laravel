@extends('layouts.main')


@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <H2>
                <a href="/post/{{ $post->slug }}">{{ $post['title'] }}</a>
            </H2>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
