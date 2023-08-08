<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'NIK' => '1201210017',
                'role' => 'adminKegiatan',
                'password' => Hash::make('qwerty')
            ],
            [
                'NIK' => '1201210018',
                'role' => 'adminDesa',
                'password' => Hash::make('asdfgh')
            ],
            [
                'NIK' => '1201210019',
                'role' => 'rw',
                'password' => Hash::make('zxcvb')
            ],
            [
                'NIK' => '1201210020',
                'role' => 'rt',
                'password' => Hash::make('halo')
            ],
        ]);
    }
}
