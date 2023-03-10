@extends('layouts.main')


@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <H2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>
            </H2>
            <p class="text-decoration-none">By: <a href="http://" class="text-decoration-none">{{ $post->user->name }}</a> in
                <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->Category->name }}</a>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
