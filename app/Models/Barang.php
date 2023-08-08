<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'kategori_barang',
        'tgl_beli',
        'keterangan',
        'stok',
        'status'
    ];
}
