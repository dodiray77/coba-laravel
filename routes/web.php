<?php

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



Route::get('/blog', function () {
    $blogPost = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!,eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit"
        ]
    ];
    return view('blog', [
        "title" => 'Blog',
        "posts" => $blogPost
    ]);
});

// halaman single post

Route::get('post/{slug}', function ($slug) {
    $blogPost = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!,eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit"
        ]
    ];

    foreach ($blogPost as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('/coba', function () {
    return view('coba', ["title" => 'Coba']);
});
