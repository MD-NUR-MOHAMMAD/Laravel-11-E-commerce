<?php

namespace App\Http\Middleware;

use App\Http\Requests\Auth\LoginRequest;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DashboardAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // return $next($request);
        // $role = Auth::user()->roles;
        // if ($role == 'admin') {
        //     return redirect()->intended(route('admin.dashboard', absolute: false));
        // }
        // if ($role == 'vendor') {
        //     return redirect()->intended(route('vendor.dashboard', absolute: false));
        // }
        // if ($role == 'user') {
        //     return redirect()->intended(route('home', absolute: false));
        // }
        return $next($request);
    }
}
