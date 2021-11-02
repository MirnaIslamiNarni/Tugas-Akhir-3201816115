<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;
//Solusi ketika dari Error Class 'App\Http\Controllers\Str' not found
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function halamanRegister(){
        return view('/register');
    }
    public function tambah(Request $request){
        $this->validate($request,[
            'email'         =>'required|email|unique:users',
            'password'    =>'required|min:8',
            'telepon'    =>'required|max:13',
            ]);
            
        $user = new \App\User;
        //$user->role = 'warga';
        $user->tipe = $request->tipe;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->konfir_password = bcrypt($request->konfir_password);
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        $user->remember_token = Str::random(60);
        $user->save();
        return redirect('/textPesan');
    }
    public function text(){
        return view('/textPesan');
    }
}
