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
            [
                'NIK' => '1201210017',
                'role' => 'rt',
                'password' => Hash::make('rt12345')
            ],
            [
                'NIK' => '1201210018',
                'role' => 'rw',
                'password' => Hash::make('rw12345')
            ]
        ]);

        DB::table('wargas')->insert([
            [
                'NIK' => '1201210015',
                'nama' => 'Naufal',
                'tempat_tgl' => 'Bandung 20 juni 2000',
                'umur' => '23',
                'jk' => 'Laki-Laki',
                'pekerjaan_sekolah' => 'Programmer',
                'pekerjaanOrtu' => 'Pensiun',
                'jalan' => 'Jl. Kebaikan no 01',
                'desa' => 'surga',
                'kecamatan' => 'bagus',
                'rt' => '14',
                'rw' => '01',
            ],
            [
                'NIK' => '1201210016',
                'nama' => 'Naufal',
                'tempat_tgl' => 'Bandung 20 juni 2000',
                'umur' => '23',
                'jk' => 'Laki-Laki',
                'pekerjaan_sekolah' => 'Programmer',
                'pekerjaanOrtu' => 'Pensiun',
                'jalan' => 'Jl. Kebaikan no 01',
                'desa' => 'surga',
                'kecamatan' => 'bagus',
                'rt' => '14',
                'rw' => '01',
            ],
            [
                'NIK' => '1201210017',
                'nama' => 'Naufal',
                'tempat_tgl' => 'Bandung 20 juni 2000',
                'umur' => '23',
                'jk' => 'Laki-Laki',
                'pekerjaan_sekolah' => 'Programmer',
                'pekerjaanOrtu' => 'Pensiun',
                'jalan' => 'Jl. Kebaikan no 01',
                'desa' => 'surga',
                'kecamatan' => 'bagus',
                'rt' => '14',
                'rw' => '01',
            ],
            [
                'NIK' => '1201210018',
                'nama' => 'Naufal',
                'tempat_tgl' => 'Bandung 20 juni 2000',
                'umur' => '23',
                'jk' => 'Laki-Laki',
                'pekerjaan_sekolah' => 'Programmer',
                'pekerjaanOrtu' => 'Pensiun',
                'jalan' => 'Jl. Kebaikan no 01',
                'desa' => 'surga',
                'kecamatan' => 'bagus',
                'rt' => '14',
                'rw' => '01',
            ],
        ]);
    }
}
