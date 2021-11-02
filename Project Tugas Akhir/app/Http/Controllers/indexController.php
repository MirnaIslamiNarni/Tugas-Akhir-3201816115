<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use \App\Kost;


class indexController extends Controller
{
    // Untuk buka halaman awal
    public function index(Request $request)
    {
        $kost = Kost::where( function($query) use($request){
                    return $request->cari ?
                        $query->from('kost')->where('kota',$request->cari) : '';
            })->where(function($query) use($request){
                    return $request->cari2 ?
                        $query->from('kost')->where('tipe',$request->cari2) : '';
            })->where(function($query) use($request){
                    return $request->cari3 ?
                        $query->from('kost')->where('harga',$request->cari3) : '';
            })->paginate(4);

        return view('index',compact('kost'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function detailKost($id)
    {
        $detailkost= Kost::find($id);
        return view('lihatKost',compact(['detailkost']));
    }
    public function lupapassword()
    {
        return view('auths.lupapassword');
    }
    public function updatepassword(Request $request)
    {
        $request->user()->update([
        'password' => Hash::make($request->get('password')),
        'konfir_password' => Hash::make($request->get('password'))
        ]);
        return redirect('/login');
    }
}
