@extends('layouts.main')


@section('container')
<h1 class="mb-5">{{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)

        <div class="col-md-4">
            <div class="card text-bg-dark">
                <a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name}}" alt="{{ $category->name}}" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.5);">{{ $category->name }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection