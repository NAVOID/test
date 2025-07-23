<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kandang extends Model
{
    protected $fillable = ['nama_kandang', 'lokasi'];

    public function hewan(): HasMany
    {
        return $this->hasMany(Hewan::class);
    }
}
