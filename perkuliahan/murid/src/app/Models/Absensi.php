<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    protected $fillable = ['murid_id', 'tanggal', 'status'];

    public function murid(): BelongsTo
    {
        return $this->belongsTo(Murid::class);
    }
}
