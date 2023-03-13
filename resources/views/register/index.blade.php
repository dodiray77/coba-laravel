@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <form class="">
                <div class="text-center">
                    <img class="" src="data:image/png;base64,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" alt="" width="72" height="57">
                </div>
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <div class="form-floating">
                    <input type="name" class="form-control rounded-top" id="name" placeholder="Tuliskan Nama Anda" name="name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="username" class="form-control" id="username" placeholder="Username" name="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection