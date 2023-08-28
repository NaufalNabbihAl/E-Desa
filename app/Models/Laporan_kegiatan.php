<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_kegiatan extends Model
{
    use HasFactory;
    protected $table = 'laporan_kegiatans';
    protected $fillable = [
        'laporan_kegiatan',
        'nama_kegiatan',
        'tanggal',
        'file'
    ];
    public $timestamps = false;
}
