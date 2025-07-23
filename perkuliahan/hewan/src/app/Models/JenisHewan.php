<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisHewan extends Model
{
    protected $table = 'jenis_hewan'; // ← Fix penting!
    protected $fillable = ['nama_jenis'];

    public function hewan(): HasMany
    {
        return $this->hasMany(Hewan::class);
    }
}
