<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn ()=>view('dashboard'))->middleware('auth');
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

require __DIR__.'/auth/auth.php';