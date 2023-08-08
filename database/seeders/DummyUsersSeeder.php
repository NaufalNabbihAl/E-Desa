<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 


class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'NIK' => '1201210015',
                'role' => 'warga',
                'password' => Hash::make('123456')
            ],
            [
                'NIK' => '1201210016',
                'role' => 'admin',
                'password' => Hash::make('abcde')
            ],
        ]);
    }
}
