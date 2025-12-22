<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/rectorate', [\App\Http\Controllers\IndexController::class, 'rectorate'])->name('rectorate');

Route::get('/post/{id}', [\App\Http\Controllers\IndexController::class, 'showPost'])->name('showPost');

Route::get('/language/change', [\App\Http\Controllers\IndexController::class, 'changeLanguage'])->name('changeLanguage');

Route::get('/contact', [\App\Http\Controllers\IndexController::class, 'contact'])->name('contact');

Route::get('/category/{id}', [\App\Http\Controllers\IndexController::class, 'post_category'])->name('post_category');

Route::get('employee/{id}', [\App\Http\Controllers\IndexController::class,'employee'])->name('employee');

Route::get('/faculties', [\App\Http\Controllers\IndexController::class, 'faculty'])->name('faculties');

Route::post('/message/send', [\App\Http\Controllers\MessageController::class, 'sendMessage'])->name('sendMessage');

Route::get('/{any}', [\App\Http\Controllers\IndexController::class, 'showPage'])->where('any', '^(?!admin).*')->name('showPage');