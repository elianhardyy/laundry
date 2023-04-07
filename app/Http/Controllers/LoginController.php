<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    //login

    public function loginView()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            if (auth()->user()->auth == 'admin') {
                return redirect()->intended('/admin');
            }
            if (Auth::user()->auth == 'pelanggan') {
                return redirect()->intended('/home');
            }
        }
        return back()->with('loginError', 'email atau password salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        // $cookie = Cookie::for
        //Auth::user()->tokens()->revoke();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
