<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => 'Blog',
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function tampil(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
    public function author(User $author)
    {
        return view('blog', [
            'title' => "User Post",
            "posts" => $author->post
        ]);
    }
}
