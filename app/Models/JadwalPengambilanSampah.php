<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPengambilanSampah extends Model
{
    use HasFactory;
    protected $table = 'jadwal_pengambilan_sampahs';
    protected $fillable = [
        'tanggal',
        'waktu',
        'lokasi'
    ];
    public $timestamps = false;
}
