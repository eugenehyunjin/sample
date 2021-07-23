<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//로그인 루트
//Route::get('/login',[\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('/join',[\App\Http\Controllers\UserController::class, 'join'])->name('join');
Auth::routes();

//기본 페이지 루트
Route::get('/posts',[\App\Http\Controllers\PostsController::class, 'index']);
Route::get('/posts/create',[\App\Http\Controllers\BlogController::class, 'create']);
Route::post('/posts/store',[\App\Http\Controllers\BlogController::class, 'store']);
Route::get('/posts/{post}',[\App\Http\Controllers\PostsController::class, 'show']);
Route::get('/posts/{post}/edit',[\App\Http\Controllers\PostsController::class, 'edit']);
Route::PATCH('/posts/{post}',[\App\Http\Controllers\PostsController::class, 'update']);
Route::DELETE('/posts/{post}',[\App\Http\Controllers\PostsController::class, 'destroy']);

//Route::resource('posts', \App\Http\Controllers\PostsController::class);



