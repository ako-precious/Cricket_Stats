<?php
namespace App\Http\Controllers;


use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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

    public function register()
    {
        return inertia('Auth/Register');
    }
    public function storeRegistration(Request $request)
    {
        $user = User::make($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]));
        $user->password = Hash::make($user->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('welcome')
            ->with('success', 'Account created!');
    }
}
