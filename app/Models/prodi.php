<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class prodi extends Model
{
    use HasFactory,HasUlids;

    protected $fillable = ["nama","kaprodi","singkatan","fakultas_id"];

    public function fakultas(): BelongsTo{
        return $this->belongsTo(related: Fakultas::class, foreignKey: 'fakultas_id', ownerKey: 'id');
    }
}
