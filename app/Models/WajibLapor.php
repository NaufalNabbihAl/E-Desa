<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibLapor extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIK',
        'terlapor',
        'ktp',
        'lokasi',
        'tanggal',
        'deskripsi'
    ];

    public $timestamps = false;
}
