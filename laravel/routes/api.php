<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/{id}',ProjectController::class,'getProject');
Route::post('/create',ProjectController::class,'setProject');
Route::put('/edit/{id}',ProjectController::class,'editProject');

