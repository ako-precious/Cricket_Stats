<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Inertia\Inertia;
class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string|min:7'
            ]);
    
            if (!Auth::attempt($request->only('email', 'password'), true)) {
                return back()->withErrors([
                    'email' => 'Authentication failed'
                ]);
            }
    
            $request->session()->regenerate();
            return redirect()->intended();
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        }
    }
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('welcome');
    }
}
