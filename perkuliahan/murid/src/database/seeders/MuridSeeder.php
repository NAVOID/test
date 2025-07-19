<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Murid;

class MuridSeeder extends Seeder
{
    public function run(): void
    {
        Murid::insert([
            [
                'nama' => 'Andi Pratama',
                'nis' => '12345',
                'kelas_id' => 1,
                'alamat' => 'Jl. Merpati No. 1',
                'tanggal_lahir' => '2007-01-15',
                'jenis_kelamin' => 'L'
            ],
            [
                'nama' => 'Siti Aminah',
                'nis' => '12346',
                'kelas_id' => 2,
                'alamat' => 'Jl. Melati No. 2',
                'tanggal_lahir' => '2007-04-21',
                'jenis_kelamin' => 'P'
            ]
        ]);
    }
}
