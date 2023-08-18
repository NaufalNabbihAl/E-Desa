<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataLaporan extends Model
{
    use HasFactory;
    protected $table = 'data_laporan';
    protected $fillable = [
        'id',
        'wajib_lapor_id',
        'bukti',
        'nama',
    ];
    public $timestamps = false;
}
