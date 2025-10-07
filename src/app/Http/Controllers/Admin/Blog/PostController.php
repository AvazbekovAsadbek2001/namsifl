<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Post;
use App\Models\PostTranslation;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
//        $translations = PostTranslation::all();
//        dd($translations);
//        $post = Post::first();
//        dd($post->translations->firstWhere('code', 'en'));
        $posts = $data->map(function ($post) {
           return [
               'id' => $post->id,
               'title' => $post->translations->firstWhere('lang_code', 'en')?->title,
               'image' => $post->image,
               'categories' => $post->categories->map(function ($category) {
                   return [
                       'id' => $category->id,
                       'title' => $category->name,
                   ];
               }),
               'tags' => $post->tags->map(function ($tag) {
                   return [
                       'id' => $tag->id,
                       'title' => $tag->name,
                   ];
               }),
               'langs' =>  getLangs()->map(function ($lang) use ($post) {
                   return [
                       'img' => $lang->flag,
                       'check' => $post->checklang($lang->code),
                   ];
               }),
               'editor' => $post->user->name,
               'status' => 'active'
           ];
        });
        return view('admin.blogs.posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        return view('admin.blogs.posts.create', compact('categories', 'tags', 'lang'));
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
            'lang' => 'string|exists:langs,code',
        ]);

        $image = $request->file('featured_image')->store('images/posts', 'public');

        $images = [];
        foreach ($request->images as $item) {
            $images[] = $item->store('images/posts', 'public');
        }

        $post = Post::create([
            'image' => $image,
            'images' => json_encode($images),
            'editor_id' => Auth::user()->id,
        ]);

        $post->categories()->attach($data['categories']);
        $post->tags()->attach($data['tags']);

        PostTranslation::create([
            'post_id' => $post->id,
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'lang_code' => $data['lang'],
        ]);

        return response()->json([
            'success' => true,
        ]);
    }
}
