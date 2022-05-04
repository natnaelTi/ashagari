<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }

    //
    public function prompt()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard')->with('success', 'You have successfully signed into the portal. Wish you all the best ...');
        }
 
        return back()->withErrors([
            'errors' => ['Process Aborted','The provided credentials do not match our records.'],
        ]);
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view('cms.dashboard')->with('user', $user);
    }
}
