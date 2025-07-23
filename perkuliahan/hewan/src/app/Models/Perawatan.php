<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perawatan extends Model
{
    protected $fillable = ['hewan_id', 'tanggal', 'keterangan'];

    public function hewan(): BelongsTo
    {
        return $this->belongsTo(Hewan::class);
    }
}
