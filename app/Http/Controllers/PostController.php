<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        } elseif(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
         return view('posts', [
        "title" => "All Posts" . $title,
        "active"=> "posts",
        "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString(),
    ]);
    }

    public function show(Post $post) {
        return view('post', [
        'title' => "Single Post",
        "active"=> "posts",
        'post'  => $post,
    ]);
    }
}
