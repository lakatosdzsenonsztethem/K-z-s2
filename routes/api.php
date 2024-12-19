<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cars' , [CarController::class, "index"]);
Route::get('/cars/{id}' , [CarController::class, "show"]);
Route::get('/cars' , [CarController::class, "show"]);