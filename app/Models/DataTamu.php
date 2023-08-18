<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'wajib_lapors_id',
        'ktp',
        'nama'
    ];
    public $timestamps = false;
    public $table = 'data_tamu';    
}
