<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
     protected $table="transaksi";
    protected $fillable=['nama','pelanggan_id','pemilik_id','kos_id','tipe','bukti','ktp','verifikasi'];
}
