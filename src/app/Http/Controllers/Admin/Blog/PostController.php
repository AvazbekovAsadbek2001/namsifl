<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTranslation;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.blogs.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blogs.posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'categories' => 'required|array',
            'categories.*' => 'integer|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:tags,id',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'images' => 'required|array',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $image = $request->file('featured_image')->store('images/posts', 'public');

        $images = [];
        foreach ($request->images as $image) {
            $images[] = $image->store('images/posts', 'public');
        }

        $post = Post::create([
            'image' => $image,
            'images' => $images,
            'editor_id' => Auth::user()->id,
        ]);

        $post->categories()->attach($data['categories']);
        $post->tags()->attach($data['tags']);

        PostTranslation::create([
            'post_id' => $post->id,
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'lang_code' => 'en',

        ]);

        return response()->json([
            'status' => 'success',
        ]);
    }
}
