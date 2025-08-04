<?php 

namespace App\Http\Controllers;

// USERS CRUD

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
    $validated = $request->validate([
        'first_name' => 'required|min:2|max:20',
        'last_name' => 'required|min:2|max:20',
        'email' => 'required|min:5|max:40|email|unique:users,email',
        'password' => [
            'required',
            'string',
            'min:8',
            'max:20',
            'confirmed',
            \Illuminate\Validation\Rules\Password::min(8)
                ->mixedCase()
                ->numbers(),
        ],
    ], [
        'email.unique' => 'This email is already registered.',
        'password.confirmed' => 'Passwords do not match.',
        'password.min' => 'Password must be at least 8 characters.',
        'first_name.required' => 'First name is required.',
        'last_name.required' => 'Last name is required.',
    ]);

        // Create user after successful validation
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Account created!');
    }

    public function logout(Request $request)
    {
        auth()->logout(); // or Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
