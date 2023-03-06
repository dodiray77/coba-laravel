@extends('layouts.main')

@section('container')
<article>
    <H2>
        {{ $post["title"] }}
    </H2>
    <h5>By: {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>

    <a name="" id="" class="btn btn-primary" href="/blog" role="button">Back to Post</a>
</article>
@endsection