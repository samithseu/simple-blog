<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // REGISTER
    public function showRegister() {
        return view('auth.register');
    }
    public function register(Request $request) {
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|string|email|unique:users",
            "password" => "required|string|min:8|confirmed",
        ]);

        $user = User::create($validated);
        Auth::login($user);
        session()->flash('success', 'Yo wassup, Welcome!');
        return redirect()->route('blogs');
    }

    // LOGIN
    public function showLogin() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required|string",
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            session()->flash('success', 'Yo wassup, Welcome!');
            return redirect()->route('blogs');
        }

        throw ValidationException::withMessages([
            "credentials" => "These credentials are incorrect!",
        ]);

    }

    // LOGOUT
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('success', 'Bye, See ya later! 👋');
        return redirect()->route('auth.show.login');
    }
}
