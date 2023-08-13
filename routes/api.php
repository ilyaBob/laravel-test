<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('category', [CategoryController::class, "allCategory"]);
Route::get('category/{id}', [CategoryController::class, "postsCategory"]);
Route::get('post/{slug}', [PostController::class, "postSlug"]);
Route::get('posts/', [PostController::class, "posts"]);

