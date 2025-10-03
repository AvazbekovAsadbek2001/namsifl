<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Page;
use App\Models\PageTranslation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
//        $pages = Page::paginate(10);
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(Request $request){
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        return view('admin.pages.create', compact('lang'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'url' => 'required|unique:pages',
            'content' => 'required',
            'description' => 'required',
            'lang' => 'required',
        ]);

        $page = Page::create(['url' => $data['url']]);

        PageTranslation::create([
            'page_id' => $page->id,
            'lang_code' => $data['lang'],
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
        ]);

        return redirect()->route('admin.pages.index');
    }
}
