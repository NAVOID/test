<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas', 'wali_kelas'];

    public function murid(): HasMany
    {
        return $this->hasMany(Murid::class);
    }
}
