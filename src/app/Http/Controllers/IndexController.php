<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function rectorate(){
        return view('rectorate');
    }

    public function showPage(Request $request){
        $page = Page::where('url', $request->any)->first();
        if ($page){
            $data = $page->translations->where('lang_code', App::getLocale())->first();
            return view('page', compact('data'));
        } else {
            abort(404);
        }
    }
}
