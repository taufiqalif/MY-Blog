<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('posts', [
            "title" => "All Posts". $title,
            'categories' => Category::all(),
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Singel Post",
            'categories' => Category::all(),
            "active" => "posts",
            "post" => $post
        ]);
    }
}