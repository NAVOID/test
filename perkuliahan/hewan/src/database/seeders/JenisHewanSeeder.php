<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisHewan;

class JenisHewanSeeder extends Seeder
{
    public function run(): void
    {
        JenisHewan::insert([
            ['nama_jenis' => 'Mamalia'],
            ['nama_jenis' => 'Reptil'],
            ['nama_jenis' => 'Burung'],
        ]);
    }
}
