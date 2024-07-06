<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback(Request $request)
{
    try {
        $user = Socialite::driver('google')->user();
        $userExists = User::where('social_id', $user->id)->first();

        if ($userExists) {
            $request->session()->regenerate();
            Auth::guard('web')->login($userExists);
            return redirect('/personal/account/detail');
        } else {
            $newUser = User::create([
                'nama' => $user->name,
                'username' => $user->name,
                'email' => $user->email,
                'social_id' => $user->id,
                'email_verified_at' => now(),
                'user_role' => 'Pelanggan',
                'id_user_role' => 3,
                'social_type' => 'google',
                'password' => bcrypt($user->password),
            ]);

            Auth::guard('web')->login($newUser);
            $request->session()->regenerate();
            return redirect('/personal/account/detail');
        }
    } catch (Exception $e) {
        dd($e->getMessage());
    }
}

}
