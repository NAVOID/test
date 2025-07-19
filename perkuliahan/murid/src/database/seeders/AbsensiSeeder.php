<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absensi;

class AbsensiSeeder extends Seeder
{
    public function run(): void
    {
        Absensi::insert([
            ['murid_id' => 1, 'tanggal' => now()->subDays(2)->toDateString(), 'status' => 'Hadir'],
            ['murid_id' => 1, 'tanggal' => now()->subDays(1)->toDateString(), 'status' => 'Izin'],
            ['murid_id' => 2, 'tanggal' => now()->toDateString(), 'status' => 'Sakit'],
        ]);
    }
}
