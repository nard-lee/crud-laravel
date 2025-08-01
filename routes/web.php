<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/auth/redirect', [GoogleController::class, 'redirect']);
Route::get('/auth/handle', [GoogleController::class, 'handle']);
