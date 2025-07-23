<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandang;

class KandangSeeder extends Seeder
{
    public function run(): void
    {
        Kandang::insert([
            ['nama_kandang' => 'Kandang A', 'lokasi' => 'Utara'],
            ['nama_kandang' => 'Kandang B', 'lokasi' => 'Selatan'],
        ]);
    }
}
