<?php

namespace App\Models;


class Post 
{
    private static $blog_posts=[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et, consequatur quaerat voluptate totam, soluta sequi, minus accusamus corporis magnam qui alias eos impedit! Impedit minima eum quidem ex unde animi dicta repudiandae qui officia fugiat asperiores pariatur provident aspernatur dolore, facilis, delectus cumque natus corrupti ab vero, labore facere. Voluptatibus provident quidem consectetur odio ut, similique quas repudiandae incidunt, amet, obcaecati corrupti enim minima labore possimus magni distinctio velit id. Ipsum cum corrupti deserunt eaque quasi, rerum asperiores perspiciatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gabriel Rolly",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et, consequatur quaerat voluptate totam, soluta sequi, minus accusamus corporis magnam qui alias eos impedit! Impedit minima eum quidem ex unde animi dicta repudiandae qui officia fugiat asperiores pariatur provident aspernatur dolore, facilis, delectus cumque natus corrupti ab vero, labore facere. "
        ]
    
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) 
        // {
        //     if ($p["slug"] === $slug) 
        //     {
        //         $post = $p;
        //     }
        // }
        // return $post;
        return $posts->firstWhere('slug', $slug);
    }

}
