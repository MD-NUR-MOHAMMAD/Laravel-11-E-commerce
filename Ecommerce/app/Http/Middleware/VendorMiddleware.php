<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user has the 'admin' role
            if (Auth::user()->roles === 'vendor') {
                return $next($request);
            }
        }

        return redirect()->route('home')->with('error', 'You are not authorized to access this page.');
    }
}
