<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Faculty;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        $lang = App::getLocale();
        $news = Post::whereHas('categories', function ($query) {
            $query->where('categories.id', 1);
        })->whereHas('translations', function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        })->with(['translations' => function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        }])->limit(6)
        ->orderBy('created_at', 'desc')
        ->get();

        $announcement = Post::whereHas('categories', function ($query) {
            $query->where('categories.id', 2);
        })->whereHas('translations', function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        })->with(['translations' => function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        }])->orderBy('created_at', 'desc')->limit(4)->get();

        return view('welcome', compact('news', 'announcement'));
    }
    public function rectorate(){
        $employees = Employee::whereIn('position_id', [1, 2])
            ->orderBy('position_id', 'asc')
            ->get();
        return view('rectorate', compact('employees'));
    }

    public function showPage(Request $request){
        $page = Page::where('url', $request->any)->first();
        if ($page && $page->checklang(App::getLocale())) {
            $data = $page->translations->where('lang_code', App::getLocale())->first();
            return view('page', compact('data'));
        } else {
            abort(404);
        }
    }

    public function showPost(Request $request){
        $post = Post::find($request->id);
        return view('post', compact('post'));
    }

    public function changeLanguage(Request $request){

        $locale = $request->input('locale');

        if (in_array($locale, ['uz', 'en', 'ru'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            App::setLocale(config('app.fallback_locale'));
            Session::put('locale', config('app.fallback_locale'));
        }

        return redirect()->back();
    }

    public function contact(){
        return view('contact');
    }

    public function post_category(Request $request){
        $lang = App::getLocale();
        $name = Category::find($request->id)?->name;
        if (!$name) return abort(404);
        $id = $request->id;

        $posts = Post::whereHas('categories', function ($query) use ( $id ) {
            $query->where('categories.id', $id);    
        })->whereHas('translations', function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        })->with(['translations' => function ($query) use ($lang) {
            $query->where('lang_code', $lang);
        }])->orderByDesc('id')->paginate(6);

        return view('news', compact('posts', 'name'));
    }
    public function employee(Request $request){
        $employee = Employee::find($request->id);

        if ($employee) {
            return view('employee', compact('employee'));
        } else {
            return abort(404);
        }
    }

    public function faculty(){
        $structures = Faculty::all();
        $name = "Faculties";
        return view('structures', compact('structures', 'name'));
    }
}
