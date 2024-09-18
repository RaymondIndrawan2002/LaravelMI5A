<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory, HasUlids;

    public function mahasiswas(){
        return $this->belongsTo( mahasiswa::class,  'prodi_id',  'id');
    }
}
