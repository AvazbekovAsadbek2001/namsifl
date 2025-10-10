<?php

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
