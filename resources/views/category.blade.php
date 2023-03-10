@extends('layouts.main')


@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<article class="mb-5">
    <H4>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>
    </H4>
    <h5>By: <a href="" class="text-decoration-none">{{ $post->author->name }}</a></h5>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection