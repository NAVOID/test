<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatKesehatan extends Model
{
    protected $fillable = ['hewan_id', 'tanggal', 'penyakit', 'pengobatan'];

    public function hewan(): BelongsTo
    {
        return $this->belongsTo(Hewan::class);
    }
}
