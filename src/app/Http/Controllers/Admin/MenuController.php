<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::whereNull('parent_id')
            ->orderBy('order')
            ->with('children')
            ->get();
        
        return view('admin.menu.index',compact('menus'));
    }
}
