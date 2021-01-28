<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'pulau';
    protected $fillable = ['id', 'nama', 'gambar', 'deskripsi'];


    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'id', 'id');
    }
}
