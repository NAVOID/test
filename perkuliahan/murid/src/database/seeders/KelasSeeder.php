<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::insert([
            ['nama_kelas' => 'X IPA 1', 'wali_kelas' => 'Bu Rina'],
            ['nama_kelas' => 'X IPA 2', 'wali_kelas' => 'Pak Dedi'],
            ['nama_kelas' => 'XI IPS 1', 'wali_kelas' => 'Bu Lilis'],
        ]);
    }
}
