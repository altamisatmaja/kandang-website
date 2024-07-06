<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $targetRoute = $request->route()->getName();
            switch ($targetRoute) {
                case 'admin.dashboard':
                    return route('admin.login');
                case 'partner.account':
                    return route('partner.login');
                default:
                    return view('/');
            }
        } else {
            $targetRoute = $request->route()->getName();
            switch ($targetRoute) {
                case 'admin.dashboard':
                    return route('admin.login');
                case 'partner.account':
                    return route('partner.login');
                default:
                    return view('/');
            }
        }
    }
}
