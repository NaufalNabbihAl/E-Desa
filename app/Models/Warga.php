<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'nama',
        'tempat_tgl',
        'umur',
        'jk',
        'pekerjaan_sekolah',
        'pekerjaanOrtu',
        'jalan',
        'desa',
        'kecamatan',
        'rt',
        'rw',
    ];
    public $timestamps = false;
}
