<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['id', 'kategori','deskripsi','gambar'];

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'id', 'id_kategori');
    }
}
