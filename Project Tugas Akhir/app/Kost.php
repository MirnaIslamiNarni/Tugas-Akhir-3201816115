<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    //Nama tabel di dalam database
    protected $table = "kost_kontrakan";
    //Nama Kolom yang ada di tb_kost
    protected $fillable = 
    ['pemilik_id','tipe','nama_kost_atau_kontrakan','nama',
    'kota','khusus','telepon','harga','fasilitas',
    'aturan','alamat','gambar1','gambar2','gambar3','status','bank','nomor_rekening'];
}


