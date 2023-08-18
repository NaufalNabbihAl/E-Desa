<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIK',
        'nama',
        'nowa',
        'lokasi',
        'deskripsi',
        'linkTP',
        'linkSP',
        'gambar',
        'tanggal',
        'status'
    ];
    public $timestamps = false;
}
