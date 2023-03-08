@extends('layouts.main')

@section('container')
    <article>
        <H2>{{ $post->title }}</H2>
        <p>By: {{ $post['author'] }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->Category->name }}</a>
        </p>
        {!! $post->body !!}

        <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
    </article>
@endsection
