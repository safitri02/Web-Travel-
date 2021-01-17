<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'pulau';
    protected $fillable = ['id', 'nama', 'gambar'];


    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'id', 'id');
    }
}
