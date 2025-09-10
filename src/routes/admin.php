<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::group(['as' => 'auth.'], function () {
    Route::view('login', 'admin.auth.login')->name('login');
    Route::post('login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('postLogin');
});

Route::group(['middleware' => ['check-admin']], function () {
    Route::get('logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'page', 'as' => 'pages.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\PageController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\PageController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\PageController::class, 'store'])->name('store');
    });
});
