<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table="pemesanan";
    protected $fillable=['nama','pelanggan_id','pemilik_id','kos_id','total','selama','harga','tipe'];

    
}
