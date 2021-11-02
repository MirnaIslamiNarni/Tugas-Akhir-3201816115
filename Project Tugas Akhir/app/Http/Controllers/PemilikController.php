<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Kost;
use \App\Pemesanan;
use \App\Transaksi;

class PemilikController extends Controller
{

    public function halamanTambah(){
         //Arahkan ke Halaman Tambah Data
        return view('Pemilik.tambahData');
    }
    //Fungsi Tambah Data / Menginput Data ke tb_kost di Database 
    public function tambah(Request $request){
    //Buat variabel baru dengan nama $kost
    //Tangkap dan simpan semua data inputan atau request dari user
        $kost = Kost::create($request->all());
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
        return redirect('/Pemilik/dataKost');
    }

    public function tampilDataKost(){
        
        $kost = Kost::all();
        return view('Pemilik.dataKost', compact('kost'));
    }

    public function edit($id)
    {
        $kost = Kost::find($id);
        return view('Pemilik.editData',compact('kost'));
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
        return redirect('/Pemilik/dataKost');
    }

    public function hapus($id){
        $kost = Kost::find($id);
        $kost->delete();
        return redirect('/Pemilik/dataKost');
    }

    public function dataPemesan(){
        $kost = Pemesanan::all();
        return view('/Pemilik.dataPesanan',compact('kost'));
    }

    public function detailKost($id){
        $detailkost = Kost::find($id);
        return view('Pemilik/detailKost',compact('detailkost'));
    }
    
    public function transaksi(){
        $data_transaksi = Transaksi::all();
        return view('Pemilik/dataTransaksi',compact('data_transaksi'));
        }

    public function hapusTransaksi($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/Pemilik/dataTransaksi');
    }

    public function verifikasi($id){
        $user= \App\Transaksi::where('id', $id); //Mengambil data siswa dengan ID yang ada di parameter ....., $id
        $user->update([
            'verifikasi'=>1
        ]);
    return redirect('/Pemilik/dataTransaksi');
    }
}
