<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login()
    {
        return view('pengguna.login');
    }
    public function authenticate(Request $request)
    {
       if(Auth::attempt($request->only('email','password'))){
        return view('pengguna.dashboard');
       }

        return back()->with('loginerror','login gagal');
    }
    public function logout(){
        Auth::logout();
        return view ('layout.home');
    }
    
}

