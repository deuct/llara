<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        $title='';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        };

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        };

        return view('blog', [
            "active" => "blog",
            "title" => "All Post" . $title,
            // "posts" => Post::all()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "active" => "blog",
            "title" => "Single Post",
            "post" => $post
            // "post" => Post::find($id)
        ]);
    }
}
