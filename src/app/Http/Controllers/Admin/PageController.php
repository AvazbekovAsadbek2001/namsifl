<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
//        $pages = Page::paginate(10);
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(){
        return view('admin.pages.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'url' => 'required|unique:pages',
            'content' => 'required',
            'description' => 'required',
        ]);

        Page::create($data);

        return redirect()->route('admin.pages.index');
    }
}
