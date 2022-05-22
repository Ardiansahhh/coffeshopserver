<?php

namespace App\Models;


class Post_ 
{
   private static $blog_post =  [
    [
        "title"  => "Judul Post Pertama",
        "slug"   => "judul-post-pertama",
        "author" => "Ardiansah",
        "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem nam ipsa ea cupiditate, nihil iure alias nesciunt illum fugiat dolorem non vel. Veritatis aliquam atque ab accusantium dicta molestias architecto ut voluptatem vero nulla labore accusamus nam magnam, cupiditate quas neque vel mollitia laborum repudiandae a suscipit maiores placeat dolorum. Ab quidem pariatur quisquam, ullam et animi ut aliquam, blanditiis culpa rerum molestias corporis aliquid explicabo? Eos unde possimus iste expedita voluptas nostrum assumenda, rem nesciunt nulla? Ipsum, sit."
    ],
    [
        "title"  => "Judul Post Kedua",
        "slug"   => "judul-post-kedua",
        "author" => "Katarina Utari Dewi",
        "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem nam ipsa ea cupiditate, nihil iure alias nesciunt illum fugiat dolorem non vel. Veritatis aliquam atque ab accusantium dicta molestias architecto ut voluptatem vero nulla labore accusamus nam magnam, cupiditate quas neque vel mollitia laborum repudiandae a suscipit maiores placeat dolorum. Ab quidem pariatur quisquam, ullam et animi ut aliquam, blanditiis culpa rerum molestias corporis aliquid explicabo? Eos unde possimus iste expedita voluptas nostrum assumenda, rem nesciunt nulla? Ipsum, sit."
    ]];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    } 
}