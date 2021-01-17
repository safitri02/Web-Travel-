<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['id', 'nama_wisata','id_daerah', 'deskripsi', 'lokasi', 'gambar'];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, 'id_daerah', 'id');
    }

    public function komentar()
    {
        return $this->hasMany(komentar::class, 'id', 'id_wisata');
    }
}
