<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/{id}',ProjectController::class,'getProject');
Route::post('/project',ProjectController::class,'setProject');
Route::put('/project/{id}',ProjectController::class,'editProject');
Route::delete('/project/{id}',ProjectController::class,'deleteProject');

