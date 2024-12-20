<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::middleware(['auth', 'TrackApiRequests'])->group(function () {

    Route::get('/{id}',[ProjectController::class,'getProject']);
    Route::post('/project',[ProjectController::class,'setProject']);
    Route::put('/project/{id}',[ProjectController::class,'editProject']);
    Route::delete('/project/{id}',[ProjectController::class,'deleteProject']);

    Route::get('/{id}',[UserController::class,'getUser']);
    Route::post('/user',[UserController::class,'setUser']);
    Route::put('/user/{id}',[UserController::class,'editUser']);
    Route::delete('/user/{id}',[UserController::class,'deleteUser']);

});


