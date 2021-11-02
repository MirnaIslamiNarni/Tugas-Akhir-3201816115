<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password','verifikasi'))){
            return redirect('/dashboard');
        }

        return redirect('/login')->with('gagal','Data tidak cocok atau akun anda belum di verifikasi');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
