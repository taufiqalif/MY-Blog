<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
    [    "title" => "Judul Pertama",
        "slug" => "judul-pertama",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos et nemo fugit omnis asperiores rem ea ratione illo nihil assumenda quos porro, doloremque repudiandae repellendus nobis molestias voluptates maxime veniam. Molestiae perferendis porro vitae ut vero, laborum sed quas dicta impedit odit alias facere, eum velit libero a dolorum ipsum!"
    ],
    [
        "title" => "Judul Kedua",
        "slug" => "judul-kedua",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos et nemo fugit omnis asperiores rem ea ratione illo nihil assumenda quos porro, doloremque repudiandae repellendus nobis molestias voluptates maxime veniam. Molestiae perferendis porro vitae ut vero, laborum sed quas dicta impedit odit alias facere, eum velit libero a dolorum ipsum!"
    ]

    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}