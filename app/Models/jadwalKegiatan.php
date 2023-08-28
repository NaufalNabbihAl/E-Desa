<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalKegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelaksana',
        'lokasi',
        'waktu',
        'waktuSelesai',
        'tingkat',
        'pembahasan',
    ];
    public $timestamps = false;
}
