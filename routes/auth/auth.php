<?php

use App\Http\Controllers\GoogleController;

Route::middleware(['guest'])->group(function(){
    Route::get('account/login', function(){
        return view('auth.login');
    })->name('account.login');

    Route::get('account/signup', function(){
        return view('auth.signup');
    })->name('account.signup');
});

Route::middleware(['guest', 'throttle:20,1'])->group(function(){
    Route::get('/auth/redirect', [GoogleController::class, 'redirect'])
    ->name('auth.google.redirect');
    Route::get('/auth/handle', [GoogleController::class, 'handle'])
    ->name('auth.google.handle');
});


