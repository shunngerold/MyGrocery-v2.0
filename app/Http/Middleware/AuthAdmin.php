<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check if it's already logged-in
        if(Auth::check()) {
            // check the user role
            if(Auth::user()->role == '1') {
                return $next($request);
            } else {
                return redirect(route('index'))->with('message','This is for Admin only!');
            }
        } else {
            return redirect(route('user.login'))->with('message','You need to logged in first, to access this page!');
        }

        return $next($request);
    }
}
