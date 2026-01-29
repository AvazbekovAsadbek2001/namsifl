<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StructureController;
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

    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Blog\CategoryController::class, 'index'])->name('index');
            Route::post('/store', [\App\Http\Controllers\Admin\Blog\CategoryController::class, 'store'])->name('store');
        });

        Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Blog\TagController::class, 'index'])->name('index');
            Route::post('/store', [\App\Http\Controllers\Admin\Blog\TagController::class, 'store'])->name('store');
        });

        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\Blog\PostController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\Blog\PostController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\Blog\PostController::class, 'store'])->name('store');
        });
    });

    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\EmployeeController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\EmployeeController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('store');
    });

    Route::group(['prefix' => 'book', 'as' => 'book.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\BookController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\BookController::class,'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\BookController::class,'store'])->name('store');
    });

    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('index');

    });

    Route::group(['prefix'=> 'structure', 'as'=> 'structure.'], function () {

        Route::group(['prefix'=> 'faculties', 'as'=> 'faculties.'], function () {
            Route::get('/', [StructureController::class,'indexFaculties'])->name('index');
            Route::get('/create', [StructureController::class,'createFaculty'])->name('create');
            Route::post('/store', [StructureController::class,'storeFaculty'])->name('store');
        });

        Route::group(['prefix'=> 'departments', 'as'=> 'departments.'], function () {
            Route::get('/', [StructureController::class,'indexDepartments'])->name('index');
            Route::get('/create', [StructureController::class,'createDepartment'])->name('create');
            Route::post('/store', [StructureController::class,'storeDepartment'])->name('store');
        });

        Route::group(['prefix'=> 'cafedra', 'as'=> 'cafedra.'], function () {
            Route::get('/', [StructureController::class,'indexCafedra'])->name('index');
            Route::get('/create', [StructureController::class,'createCafedra'])->name('create');
            Route::post('/store', [StructureController::class,'storeCafedra'])->name('store');
        });
    });

    Route::get('/message/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('message');

    Route::post('/file-upload', [\App\Http\Controllers\Admin\FileController::class, 'uploadFile'])->name('file-upload');

});

Route::group(['as' => 'ajax.'], function () {
    Route::get('/cafedra-by-faculty/{faculty_id}', [\App\Http\Controllers\Admin\AjaxController::class, 'getCafedrasByFaculty'])->name('departmentsByFaculty');
});
