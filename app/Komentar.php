<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = ['id', 'id_wisata', 'nama', 'komentar'];
    protected $table = 'komentar';

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'id_wisata', id);
    }
}
