<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handle()
    {
        try 
        {
            $googleUser = Socialite::driver('google')->user();
        } catch(\Exception $err) {
            return redirect('/account/login')->with('error', 'Google authentication failed');
        }

        if (!$googleUser->getEmail()) 
        {
            abort(400, 'No email address returned from Google.');
        }

        $user = User::where('email', $googleUser->getEmail())->first();

        if($user)
        {
            $user->update([
                'google_id' => $user->google_id ?? $googleUser->getId(),
                'avatar' => $user->avatar ?? $googleUser->getAvatar(),
                'auth_provider' => 'google',
                'email_verified_at' => $user->email_verified_at ?? now()
            ]);
        } 
        else 
        {
            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [   
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar() ?? null,
                    'auth_provider' => 'google',
                    'password' => null,
                    'email_verified_at' => now()
                ]
            );
        }

        Auth::login($user, true);
        return redirect('/dashboard');
    }
}