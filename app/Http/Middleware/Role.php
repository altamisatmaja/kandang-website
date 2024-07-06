<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::check() && Auth::user()->user_role == $role) {
                return $next($request);
            }
        }

        $currentUserRole = Auth::check() ? Auth::user()->user_role : null;

        $redirectTo = '';

        switch ($currentUserRole) {
            case 'Admin':
                $redirectTo = 'admin.login';
                $message = 'Anda bukan Admin!';
                break;
            case 'Partner':
                $redirectTo = 'partner.login';
                $message = 'Anda bukan Partner!';
                break;
            default:
                $redirectTo = 'login';
                $message = 'Anda bukan pelanggan!';
                break;
        }

        Auth::logout();
        return redirect()->route($redirectTo)->with('status', $message);
    }
}
