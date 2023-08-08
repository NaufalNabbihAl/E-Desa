<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalKegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelaksana',
        'Lokasi',
        'waktu',
        'waktuSelesai',
        'status',
        'pembahasan',
    ];
    public $timestamps = false;
}
