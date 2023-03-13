<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blog', [
            "title" => 'All Posts' . $title,
            "active" => 'blog',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function tampil(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "active" => 'blog',
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
