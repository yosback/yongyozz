<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        try {
            Log::info('Redirecting to Google');
            return Socialite::driver('google')->redirect();
        } catch (Exception $e) {
            Log::error('Error redirecting to Google', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('/login')->with('error', 'Tidak dapat terhubung ke Google.');
        }
    }

    public function handleGoogleCallback()
    {
        try {
            Log::info('Handling Google callback');
            
            $googleUser = Socialite::driver('google')->user();
            
            Log::info('Google user data received', [
                'id' => $googleUser->id,
                'email' => $googleUser->email,
                'name' => $googleUser->name
            ]);
            
            $user = User::updateOrCreate(
                ['email' => $googleUser->email],
                [
                    'name' => $googleUser->name,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(Str::random(16))
                ]
            );
            
            Log::info('User authenticated', ['user_id' => $user->id]);
            
            Auth::login($user);
            
            return redirect('/dashboard');
            
        } catch (Exception $e) {
            Log::error('Google authentication error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('/login')->with('error', 'Gagal login menggunakan Google.');
        }
    }
} 