<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request){
        $request->authenticate();
        $request->session()->regenerate();
    
        $redirectTo = '';
    
        if(Auth::check()) {
            switch (Auth::user()->user_role) {
                case 'Admin':
                    $redirectTo = 'admin.dashboard';
                    break;
                case 'Partner':
                    $redirectTo = 'partner.account';
                    break;
                default:
                    $redirectTo = 'customer.account';
                    break;
            }
        } else {
            $loginRoute = '';
            switch ($request->input('user_role')) {
                case 'Admin':
                    $loginRoute = 'admin.login';
                    break;
                case 'Partner':
                    $loginRoute = 'partner.login';
                    break;
                default:
                    $loginRoute = 'customer.login';
                    break;
            }
            return redirect()->route($loginRoute)->with('status', 'Invalid credentials.');
        }
    
        return redirect()->route($redirectTo);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
