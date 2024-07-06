<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterCustomerController extends Controller
{
    public function index()
    {
        return view('customer.auth.register');
    }

    public function emailVerified(LoginRequest $request, $id) {
        $user = User::findOrFail($id);

        $user->email_verified_at = now();
        $user->save();

        $request->authenticate();
        $request->session()->regenerate();

        if (Auth::check()) {
            return redirect()->route('customer.account')->with('success', 'Akun berhasil diverifikasi!');
        } else {
            return redirect()->route('login')->with('error', 'Gagal melakukan autentikasi setelah verifikasi email.');
        }
    }



    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('customer.verify.email')->with('status', 'Akun berhasil dibuat, silahkan verifikasi');
    }

    public function verify_email(Request $request, $id, $hash)
    {
        $user = User::find($id);
        return view('verify', compact('user'));
    }

    public function show(Request $request)
    {
        $id = $request->route('id');
        $hash = $request->route('hash');

        $user = User::findOrFail($id);

        if ($user) {
            $user->email_verified_at = now();
            $user->save();

            return redirect()->route('customer.auth.verified', $hash);
        } else {
            return redirect()->route('verification.notice')->with('error', 'Token ekspires.');
        }

        // Auth::guard('web')->login($verify);

        // return redirect()->route('customer.verify.email', $user->id);
        // if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        //     abort(403);
        // }

        // if (!$user->hasVerifiedEmail()) {
        //     $user->email_verified_at = now();
        //     $user->save();

        //     event(new Verified($user));

        //     return redirect()->route('customer.verify.email', $id)->with('status', 'Email berhasil diverifikasi');
        // }
    }

}
