<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ["title" => 'Home']);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Dodi",
        "email" => "dodi@email.com",
        "image" => "dodi.png",
        "title" => 'About'
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

// halaman single post

Route::get('post/{slug}', [PostController::class, 'tampil']);

Route::get('/coba', function () {
    return view('coba', ["title" => 'Coba']);
});
