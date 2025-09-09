<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin/login');

Route::group(['as' => 'auth.'], function () {
    Route::view('login', 'admin.auth.login')->name('login');

});
