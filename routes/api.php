<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

Route::get('/test', function () {
    return response()->json(['message' => 'API works!']);
});

Route::apiResource('/genres', GenreController::class);