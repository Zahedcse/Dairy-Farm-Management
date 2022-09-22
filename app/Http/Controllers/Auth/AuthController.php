<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.pages.login');
    }
    public function register()
    {
        return view('admin.pages.register');
    }
    public function store(RegisterRequest $request, User $user)
    {
        $user->fill($request->validated())->save();
        
        return redirect()->route('login')->with('msg', 'Registration successfull');
    }
    public function loginstore(LoginRequest $request)
    {
        $credentials = $request->validated();
        
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Welcome! to Dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
