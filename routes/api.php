<?php 

use Illuminate\Http\Request;
use App\Http\Controllers\api\PostApiController;
use Illuminate\Support\Facades\Route;


// Restful API
Route::apiResource('post', PostApiController::class);
