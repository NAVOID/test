<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perawatan;

class PerawatanSeeder extends Seeder
{
    public function run(): void
    {
        Perawatan::insert([
            ['hewan_id' => 1, 'tanggal' => now()->subDays(2)->toDateString(), 'keterangan' => 'Pembersihan kandang'],
            ['hewan_id' => 2, 'tanggal' => now()->toDateString(), 'keterangan' => 'Pemberian vitamin'],
        ]);
    }
}
