<?php 

use Illuminate\Http\Request;
use App\Http\Controllers\api\v1\PostApiController;
use Illuminate\Support\Facades\Route;


// Restful API
Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);
});
