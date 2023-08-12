<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultass';
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'fakultas_id');
    }
}
