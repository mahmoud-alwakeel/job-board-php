<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
 
Route::get('/', IndexController::class);
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);

Route::get('/job', JobController::class);

Route::resource('blog', PostController::class );

Route::resource('comments', CommentController::class);

Route::resource('tags', TagController::class);

