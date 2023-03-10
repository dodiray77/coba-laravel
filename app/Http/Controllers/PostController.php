<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => 'All Posts',
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function tampil(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
    // public function author(User $author)
    // {
    //     return view('blog', [
    //         'title' => "Post By Author : $author->name",
    //         "posts" => $author->post
    //     ]);
    // }
}
