@extends('layouts.main')

@section('container')
    <article>
        <H2>
            {{ $post->title }}
        </H2>
        <h5>By: {{ $post['author'] }}</h5>
        {!! $post->body !!}

        <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
    </article>
@endsection
