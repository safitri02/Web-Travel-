<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['id','id_daerah', 'nama_wisata', 'deskripsi', 'lokasi', 'gambar'];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, 'id_daerah', 'id');
    }

    public function komentar()
    {
        return $this->hasMany(komentar::class, 'id', 'id_wisata');
    }

    public function kategori()
    {
       return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
