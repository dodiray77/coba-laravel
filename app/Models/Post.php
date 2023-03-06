<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static
        $blogPost = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Dodi",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!"
            ],
            [
                "title" => "Judul Post Dodi",
                "slug" => "judul-post-kedua",
                "author" => "Dodi",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure reiciendis architecto sapiente rem voluptatum. Fugit, ipsam harum saepe quibusdam quo ratione soluta suscipit voluptatem maiores ipsum eaque ut corporis aspernatur magnam sapiente expedita sint, eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit!,eveniet velit! Velit eum doloremque itaque aspernatur officia possimus unde magnam quibusdam fuga! Aliquam provident quo placeat optio quae tempore officiis vitae doloremque aperiam, natus neque illum ab sequi! Deleniti quo voluptas, facilis amet tempore illo excepturi numquam tenetur, esse ullam consequatur voluptatem nihil suscipit"
            ]
        ];

    public static function all()
    {
        return collect(self::$blogPost);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
