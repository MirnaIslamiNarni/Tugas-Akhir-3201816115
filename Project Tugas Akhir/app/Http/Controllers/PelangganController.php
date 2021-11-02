<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kost;
use \App\Pemesanan;
use \App\User;
use \App\Transaksi;

class PelangganController extends Controller
{
    public function daftarKost(Request $request){
        $kost = Kost::where( function($query) use($request){
                return $request->cari ?
                    $query->from('kost')->where('kota',$request->cari) : '';
        })->where(function($query) use($request){
                return $request->cari2 ?
                    $query->from('kost')->where('tipe',$request->cari2) : '';
        })->where(function($query) use($request){
                return $request->cari3 ?
                    $query->from('kost')->where('harga',$request->cari3) : '';
        })->get();
            return view('Customer.daftarKosts',compact('kost'));
    }
    public function pesanBerhasil(){
        return view('Customer/pesan');
    }
    public function detail($id){
        $detailkost = Kost::find($id);
        return view('Customer/detailKost',compact('detailkost'));
    }
    public function pesan(Request $request, $id){
        $pesankost = Kost::find($id);
        return view('Customer/pesanKost',compact('pesankost'));
    }
    public function setuju(Request $request){
        $kost = Pemesanan::create($request->all());
        return redirect('Customer/daftarPesanan');
    }
    public function tampilPesanan(){
        $daftarPesan = Pemesanan::all();
        return view('Customer.daftarPesanan', compact('daftarPesan'));
    }
    public function hapusPesanan($id){
        $hapus = Pemesanan::find($id);
        $hapus->delete();
        return redirect('Customer/daftarPesanan');
    }
    public function tampilDataUser(){
    $dataUser = User::find(auth()->user()->id);
    return view('Customer.uploadData', compact('dataUser'));
    }

    public function upload(Request $request){
        $upload= User::find(auth()->user()->id);
        $upload->update($request->all()); //Mengambil data dari request
        if($request->hasFile('ktp')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada MOVE gambar ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('ktp')->move('images/', $request->file('ktp')->getClientOriginalName());
            //Kemudia simpan ke database
            $upload->ktp = $request->file('ktp')->getClientOriginalName();
            $upload->save();
        
            return redirect('/Customer/uploadData');
        }
        }

        public function transaksi(){
        $data_transaksi = Transaksi::all();
        return view('Customer/dataTransaksi',compact('data_transaksi'));
        }

        public function uploadBukti($id){
            $tampil_data = Pemesanan::find($id);
            return view('Customer/transaksi',compact('tampil_data'));
        }
        public function simpanBukti(Request $request){
        $simpanBukti = Transaksi::create($request->all()); 
        $data_transaksi = Transaksi::all();       
        if($request->hasFile('ktp')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada MOVE gambar ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('ktp')->move('images/', $request->file('ktp')->getClientOriginalName());
            //Kemudia simpan ke database
            $simpanBukti->ktp = $request->file('ktp')->getClientOriginalName();
            $simpanBukti->save();
        }
        if($request->hasFile('bukti')) //Cek apakah ada file avatar yang di Upload 
        {
            // jika ada MOVE gambar ke folder IMAGES dan simpan nama gambarnya dengan NAMA ORIGINAL 
            $request->file('bukti')->move('images/', $request->file('bukti')->getClientOriginalName());
            //Kemudia simpan ke database
            $simpanBukti->bukti = $request->file('bukti')->getClientOriginalName();
            $simpanBukti->save();

        return redirect('Customer/pesan');
        }
    }
}
