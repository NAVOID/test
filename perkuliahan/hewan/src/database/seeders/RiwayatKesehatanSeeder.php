<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatKesehatan;

class RiwayatKesehatanSeeder extends Seeder
{
    public function run(): void
    {
        RiwayatKesehatan::insert([
            [
                'hewan_id' => 1,
                'tanggal' => now()->subDays(5)->toDateString(),
                'penyakit' => 'Demam',
                'pengobatan' => 'Suntik antibiotik'
            ]
        ]);
    }
}
