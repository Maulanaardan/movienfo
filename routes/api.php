<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StatusApiController;

Route::get('/test', function () {
    return response()->json(['message' => 'API works!']);
});

Route::apiResource('/genres', GenreController::class);
Route::apiResource('/movies', MovieController::class);
Route::get('/status', [StatusApiController::class, 'index']);