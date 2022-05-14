<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home",
        "posts" => Post::all(),
        'categories' => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'categories' => Category::all(),
        "active" => "about",
        "name" => "Taufiq Alif Rahman",
        "image" => "taufiq_01.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function () {
//     return view('categories',[
//         'title' => 'Post Categories',
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Category : $category->name",
//         'active' => "category",
//         'posts' => $category->posts->load('category')
//         // 'category' => $category->name
//     ]);
// });


Route::get('/author/{user}', function(User $user){
    return view('posts',[
        'title' => 'User Posts',
        'posts' => $user->posts,
        'user' => $user->name
    ]);
});