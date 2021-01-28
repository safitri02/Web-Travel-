<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $fillable = ['id', 'id_wisata', 'nama', 'komentar'];

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'id_wisata', id);
    }
}
