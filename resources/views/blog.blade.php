@extends('layouts.main')


@section('container')
<h1 class="mb-5">{{ $title }}</h1>
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <H2>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>
    </H2>
    <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name}}</a> in
        <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    <p>{{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
</article>
@endforeach
@endsection