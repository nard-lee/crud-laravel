<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/account/login');
});

require __DIR__.'/auth/auth.php';