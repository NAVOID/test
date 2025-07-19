<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        Nilai::insert([
            ['murid_id' => 1, 'mata_pelajaran_id' => 1, 'nilai_angka' => 85.5, 'semester' => 'Ganjil'],
            ['murid_id' => 1, 'mata_pelajaran_id' => 2, 'nilai_angka' => 78.0, 'semester' => 'Ganjil'],
            ['murid_id' => 2, 'mata_pelajaran_id' => 1, 'nilai_angka' => 92.0, 'semester' => 'Genap'],
        ]);
    }
}
