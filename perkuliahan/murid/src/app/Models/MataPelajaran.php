<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataPelajaran extends Model
{
    protected $fillable = ['nama_mapel', 'kode_mapel'];

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
}
