<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {
    return "Главная ";
})->name("main");

Route::middleware(["auth", "admin"])->group(function (){


Route::prefix('admin')->group(function () {

    Route::get("/", [AdminController::class, "index"])->name("admin.index");

    Route::controller(CategoryController::class)->group(function () {
        Route::name('admin.category.')->group(function () {
            Route::get('/category', "index")->name("index");
            Route::get('/category/create', "create")->name("create");
            Route::post('/category', "store")->name("store");
            Route::get('/category/{id}/edit', "edit")->name("edit");
            Route::patch('/category/{id}', "update")->name("update");
        });
    });

    Route::controller(PostController::class)->group(function () {
        Route::name('admin.post.')->group(function () {
            Route::get('/post', "index")->name("index");
            Route::get('/post/create', "create")->name("create");
            Route::post('/post', "store")->name("store");
            Route::get('/post/{id}/edit', "edit")->name("edit");
            Route::patch('/post/{id}', "update")->name("update");
            Route::delete('/post/{id}', "destroy")->name("destroy");
        });
    });

    Route::controller(UserController::class)->group(function () {
        Route::name('admin.user.')->group(function () {
            Route::get('/user', "index")->name("index");
            Route::get('/user/create', "create")->name("create");
            Route::post('/user', "store")->name("store");
            Route::get('/user/{id}/edit', "edit")->name("edit");
            Route::patch('/user/{id}', "update")->name("update");
            Route::delete('/user/{id}', "destroy")->name("destroy");
        });
    });


});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
