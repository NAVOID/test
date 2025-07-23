<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hewan extends Model
{
    protected $fillable = ['nama', 'jenis_hewan_id', 'kandang_id', 'umur', 'jenis_kelamin'];

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(JenisHewan::class, 'jenis_hewan_id');
    }

    public function kandang(): BelongsTo
    {
        return $this->belongsTo(Kandang::class);
    }

    public function perawatan(): HasMany
    {
        return $this->hasMany(Perawatan::class);
    }

    public function riwayatKesehatan(): HasMany
    {
        return $this->hasMany(RiwayatKesehatan::class);
    }
}
