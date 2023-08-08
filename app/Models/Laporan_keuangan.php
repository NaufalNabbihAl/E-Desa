<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_keuangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'noSurat',
        'nama',
        'jenis_dokumen',
        'tanggal',
        'file'
    ];
    public $timestamps = false;
}
