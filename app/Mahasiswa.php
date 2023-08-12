<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function fakultas()
    {
        return $this->hasOne(Fakultas::class,'id','fakultas_id');
    }
}
