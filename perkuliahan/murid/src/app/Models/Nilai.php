<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    protected $fillable = ['murid_id', 'mata_pelajaran_id', 'nilai_angka', 'semester'];

    public function murid(): BelongsTo
    {
        return $this->belongsTo(Murid::class);
    }

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
