<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Guru',
            'role' => 'admin',
            'siswa_id' => 0,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'andi@gmail.com',
            'password' => bcrypt('siswa')
        ]);
        DB::table('users')->insert([
            'name' => 'Andita saputri',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'anditan@gmail.com',
            'password' => bcrypt('siswa')
        ]);
    }
}
