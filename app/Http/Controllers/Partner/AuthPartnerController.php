<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthPartnerController extends Controller
{
    public function index()
    {
        return view('partner.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->user_role == 'Partner') {
                $request->session()->regenerate();
                $partner = Partner::where('id_user', $user->id)->first();

                if ($partner) {
                    if ($partner->status == 'Sudah diverifikasi') {
                        return redirect()->route('partner.dashboard')->with('status', 'Anda berhasil login');
                    } elseif ($partner->status == 'Belum terverifikasi') {
                        Auth::guard('web')->logout();
                        return redirect()->route('partner.login')->with('status', 'Anda belum diverifikasi');
                    } else {
                        Auth::guard('web')->logout();
                        return redirect()->route('partner.login')->with('status', 'Akun anda dinonaktifkan');
                    }
                } else {
                    Auth::guard('web')->logout();
                    return redirect()->route('partner.login')->with('status', 'Anda belum diverifikasi');
                }
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('partner.login')->with('status', 'Anda bukan partner!');
            }
        }
        return redirect()->route('partner.login')->with('status', 'Email atau password salah.');
    }




    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create($input);

        return response()->json([
            'data' => $user
        ]);
    }

     /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
