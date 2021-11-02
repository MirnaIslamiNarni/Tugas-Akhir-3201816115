<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Kost;
use \App\Transaksi;

class AdminController extends Controller
{
    public function hapusUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/Admin/dataUser');
    }
    public function hapusUser2($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/Admin/dataUser2');
    }
    public function hapusUserBaru($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/Admin/dataUserBaru');
    }
    public function tampilDataUser(){
        $user = User::all();
        return view('Admin/dataUser',compact('user'));
    }
    public function tampilDataUser2(){
        $user = User::all();
        return view('Admin/dataUser2',compact('user'));
    }
    public function tampilDataUserBaru(){
        $user = User::all();
        return view('Admin/dataUserBaru',compact('user'));
    }
    public function editUser($id){
        $user = User::find($id);
        return view('Admin/editUser',compact('user'));
    }
    public function tampilDataKost(){
        $kost = Kost::all();
        return view('Admin/dataKostAll',compact('kost'));
    }
    public function tampilDataKontrakkan(){
        $kost = Kost::all();
        return view('Admin/dataKontrakanAll',compact('kost'));
    }
    public function tampilDetailKost($id){
        $kost= Kost::find($id);
        return view('Admin/detailKost',compact('kost'));
    }
    public function tampilDetailKosntrakkan($id){
        $kost= Kost::find($id);
        return view('Admin/detailKontrakkan',compact('kost'));
    }
    public function dataTransaksiKost(){
    $data_transaksi= Transaksi::all();
    return view('Admin/dataTransaksiKost',compact('data_transaksi'));
    }
    public function dataTransaksiKontrakkan(){
    $data_transaksi= Transaksi::all();
    return view('Admin/dataTransaksiKontrakkan',compact('data_transaksi'));
    }
    
    public function edit($id)
    {
        $kost = Kost::find($id);
        return view('Admin.editData',compact('kost'));
    }

    public function update(Request $request, $id){
        $kost = Kost::find($id);
        $kost->update($request->all());
        if($request->hasFile('gambar1')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada gambar, MOVE ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('gambar1')->move('images/', $request->file('gambar1')->getClientOriginalName());
            //Kemudia simpan ke database
            $kost->gambar1 = $request->file('gambar1')->getClientOriginalName();
            $kost->save();
        }
        if($request->hasFile('gambar2')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada gambar, MOVE ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('gambar2')->move('images/', $request->file('gambar2')->getClientOriginalName());
            //Kemudia simpan ke database
            $kost->gambar2 = $request->file('gambar2')->getClientOriginalName();
            $kost->save();
        }
        if($request->hasFile('gambar3')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada gambar, MOVE ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('gambar3')->move('images/', $request->file('gambar3')->getClientOriginalName());
            //Kemudia simpan ke database
            $kost->gambar3 = $request->file('gambar3')->getClientOriginalName();
            $kost->save();
        }
        //Jika Berhasil Menambah Data maka akan dialihkan ke Halaman Data Kost/Kontrakan
        return redirect('/Admin/dataKostAll');
    }
    public function hapus($id){
        $kost = Kost::find($id);
        $kost->delete();
        return redirect('/Admin/dataKostAll');
    }
    public function detailKost($id){
    $detailkost = Kost::find($id);
    return view('Admin/detailKost',compact('detailkost'));
    }
    public function detailKontrakkan($id){
    $detailkontrakkan = Kost::find($id);
    return view('Admin/detailKontrakkan',compact('detailkontrakkan'));
    }
    public function verifikasi($id){
        $user= \App\User::where('id', $id); //Mengambil data siswa dengan ID yang ada di parameter ....., $id
        $user->update([
            'verifikasi'=>1
        ]);
    return redirect('/Admin/dataUser');
    }
}
