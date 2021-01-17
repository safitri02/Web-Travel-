<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';
    protected $fillable = ['id', 'tiket', 'deskripsi', 'tujuan', 'harga', 'gambar'];
}
