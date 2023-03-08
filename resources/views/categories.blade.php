@extends('layouts.main')


@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <H2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </H2>
            </li>
        </ul>
    @endforeach
@endsection
