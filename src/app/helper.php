<?php

function getLangs(){
    return \App\Models\Lang::all();
}

function currentLang(){
    $langcode = App::getLocale();
    return \App\Models\Lang::where('code', $langcode)->first();
}
