<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|no_css_injection',
            'username' => 'required|string|lowercase_unique_alpha_num|no_css_injection',
            'email' => 'required|string|email|unique:users,email|no_css_injection',
            'password' => 'required|min:6|no_css_injection',
            'konfirmasi_password' => 'required|same:password|no_css_injection',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama harus berupa angka dan huruf',
            'nama.no_css_injection' => 'Dilarang keras mengisi script',
            'username.no_css_injection' => 'Dilarang keras mengisi script',
            'password.no_css_injection' => 'Dilarang keras mengisi script',
            'konfirmasi_password.no_css_injection' => 'Dilarang keras mengisi script',
            'username.required' => 'Username wajib diisi',
            'username.string' => 'Username harus berupa angka dan huruf',
            'username.lowercase_unique_alpha_num' => 'Username harus berupa angka, huruf, tanpa spasi, dan tanpa karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus diisi sesuai format email',
            'email.unique' => 'Email sudah pernah didaftarkan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Panjang password minimal 6 karakter',
            'konfirmasi_password.required' => 'Konfirmasi password wajib diisi',
            'konfirmasi_password.min' => 'Panjang konfirmasi password minimal 6 karakter',
            'konfirmasi_password.same' => 'Masukkan Konfirmasi password sesuai dengan password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
