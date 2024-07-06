<?php

namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthPartnerController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $partner = $user->partner()->where('status', 'Sudah diverifikasi')->first();
            if ($user->id_user_role == 3 && $partner) {
                $token = Auth::guard('api')->attempt($credentials);
                cookie()->queue(cookie('token', $token, 120));
                return redirect('/partner/dashboard');
            } else if (!$partner) {
                return back()->withErrors(['error' => 'Anda belum diverifikasi!']);
            } else {
                return back()->withErrors(['error' => 'Anda bukan partner!']);
            }
        }

        return back()->withErrors(['error' => 'Email atau password salah']);
    }
}
