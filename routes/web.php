<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/job', [JobController::class, 'index']);
