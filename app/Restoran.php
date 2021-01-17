<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $table = 'restoran';
    protected $fillable = ['id', 'nama_restoran', 'deskripsi', 'alamat', 'gambar'];
}
