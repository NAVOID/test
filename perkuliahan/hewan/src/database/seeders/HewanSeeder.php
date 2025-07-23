<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    public function run(): void
    {
        Hewan::insert([
            [
                'nama' => 'Singa',
                'jenis_hewan_id' => 1,
                'kandang_id' => 1,
                'umur' => 5,
                'jenis_kelamin' => 'Jantan',
            ],
            [
                'nama' => 'Burung Merak',
                'jenis_hewan_id' => 3,
                'kandang_id' => 2,
                'umur' => 2,
                'jenis_kelamin' => 'Betina',
            ],
        ]);
    }
}
