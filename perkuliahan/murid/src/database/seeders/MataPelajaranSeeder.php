<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    public function run(): void
    {
        MataPelajaran::insert([
            ['nama_mapel' => 'Matematika', 'kode_mapel' => 'MAT01'],
            ['nama_mapel' => 'Bahasa Inggris', 'kode_mapel' => 'ENG01'],
            ['nama_mapel' => 'Fisika', 'kode_mapel' => 'FIS01'],
        ]);
    }
}
