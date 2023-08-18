<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjam extends Model
{
    use HasFactory;
    protected $table = 'data_peminjams';
    protected $fillable = [
        'NIK',
        'acara',
        'id_barang',
        'jumlah',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
    ];
    public $timestamps = false;
}
