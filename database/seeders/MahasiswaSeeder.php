<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Ibrahim',
                'nim' => '13242520019',
                'prodi' => 'Teknologi Informasi',
                'email' => 'ibrahim@gmail.com',
                'nohp' => '081234567890',
                'foto' => 'images/LAs.jpg',
            ],
            [
                'nama' => 'Indra',
                'nim' => '13242520026',
                'prodi' => 'Teknologi Informasi',
                'email' => 'indra@gmail.com',
                'nohp' => '081234567891',
                'foto' => 'images/LAs.jpg',
            ],
        ]);
    }
}
