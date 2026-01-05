<?php

use Illuminate\Support\Facades\App;

function getLangs(){
    return \App\Models\Lang::all();
}

function currentLang(){
    $langcode = App::getLocale();
    return \App\Models\Lang::where('code', $langcode)->first();
}

function getMenu(){
    $menus = \App\Models\Menu::whereNull('parent_id')
        ->with('children')
        ->orderBy('order')
        ->get();

    return $menus;
}

function getCountNewMessages($type){
    if ($type > 0){
        return \App\Models\Message::where('type', $type)->where('status', 'new')->count();
    } else {
        return \App\Models\Message::where('status', 'new')->count();
    }
}