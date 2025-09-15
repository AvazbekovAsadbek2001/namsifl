<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.blogs.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blogs.posts.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
