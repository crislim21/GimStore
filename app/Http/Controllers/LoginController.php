<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        ]);
        $rememberMe = true;
        if($request->remember == null) {
            $rememberMe = false;
        }

        if(Auth::attempt($credentials, $rememberMe)) {
            if($rememberMe == true) {
                Cookie::queue('last_login',$request->email, time()+60);
            }

            $request->session()->regenerate();
            if(Auth::user()->role == 'admin') {
                return redirect()->intended('/admin/home')->with('success', 'Welcome back, '.Auth::user()->username);
            }
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Username or password is incorrect');


    }

    public function logout(Request $request) {
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
