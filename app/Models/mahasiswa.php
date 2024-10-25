<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory ;

    protected $fillable = ["npm","nama","tanggal_lahir","tempat_lahir","email","hp","alamat","prodi_id"];

    public function mahasiswas(){
        return $this->belongsTo( mahasiswa::class,  'prodi_id',  'id');
    }
}
