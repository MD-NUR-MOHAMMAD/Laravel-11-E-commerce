<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('adminto.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'roles' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'roles' => $request->roles,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $role = Auth::user()->roles;
        $id = Auth::user()->id;
        if ($role == 'admin') {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }
        if ($role == 'vendor') {
            if (Vendor::where('user_id', $id)->exists()) {
                return redirect()->intended(route('vendor.dashboard', absolute: false));
            }
        }
        if ($role == 'user') {
            if (User::where('user_id', $id)->exists()) {
                return redirect()->intended(route('user.dashboard', absolute: false));
            }
        }

        return redirect(route('home', absolute: false));
    }
}
