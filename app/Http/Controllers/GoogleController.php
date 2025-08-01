<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class GoogleController 
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handle()
    {

        $googleUser = Socialite::driver('google')->user();
        
        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [   
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'auth_provider' => 'google',
                'password' => null,
                'email_verified_at' => now()
            ]
        );

        Auth::login($user, true);
        return redirect('/dashboard');
    }
}