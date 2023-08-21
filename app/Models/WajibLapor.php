<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibLapor extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIK',
        'lokasi',
        'tanggal',
        'pulang',
        'deskripsi'
    ];

    public $timestamps = false;
}
