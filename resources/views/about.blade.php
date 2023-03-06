
@extends('layouts.main')

@section('container')
<H1>Halaman About</H1>
<h3>{{ $name }}</h3>
<h4>{{ $email }}</h4>
<img src="img/{{ $image }}" width="100" alt="{{ $name }}" srcset="" class="img-fluid rounded-circle ms"
@endsection
