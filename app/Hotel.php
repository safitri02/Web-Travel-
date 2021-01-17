<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';
    protected $fillable = ['id', 'nama_hotel', 'harga', 'deskripsi', 'alamat', 'gambar'];
}
