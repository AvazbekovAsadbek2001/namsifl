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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/rectorate', [\App\Http\Controllers\IndexController::class, 'rectorate'])->name('rectorate');

Route::get('/{any}', [\App\Http\Controllers\IndexController::class, 'showPage'])->name('showPage');

Route::get('/post/{id}', [\App\Http\Controllers\IndexController::class, 'showPost'])->name('showPost');
