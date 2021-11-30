<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Andi Saputra',
            'nis' => 101,
            'tgl_lahir' => '2001-05-16'
        ]);

        DB::table('siswa')->insert([
            'nama' => 'Andini Saputri',
            'nis' => 102,
            'tgl_lahir' => '2004-06-19'
        ]);
    }
}
