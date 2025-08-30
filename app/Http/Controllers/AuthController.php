<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    // Signup GET, Signup POST, Login GET, Login POST, Logout POST

    public function showSignupForm() {
        return view('auth.signup', ['pageTitle' => 'Signup']);
    }

    public function signup(SignupRequest $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        
        // build in auth helper function to login the user
        auth()->login($user);
        return redirect('/');
    }

    public function showLoginForm() {
        return view('auth.login', ['pageTitle' => 'Login']);
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }
}
