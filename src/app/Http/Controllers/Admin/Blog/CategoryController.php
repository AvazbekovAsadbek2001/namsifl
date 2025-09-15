<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.blogs.categories.index' , compact('categories'));
    }

    public function create()
    {
        return view('admin.blogs.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($data);

        return redirect()->route('admin.blog.category.index')->with('success', 'Category created successfully.');
    }
}
