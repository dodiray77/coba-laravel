@extends('layouts.main')

@section('container')
<article>
    <H2>{{ $post->title }}</H2>
    <p class="text-decoration-none">By: <a href="">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->Category->name }}</a>
    </p>
    {!! $post->body !!}
    <hr>

    <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
</article>
@endsection