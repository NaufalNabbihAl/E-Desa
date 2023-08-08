<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSampah extends Model
{
    use HasFactory;
    // protected $table = 'bank_sampah';
    protected $fillable = [
        'nama',
        'berat',
        'pendapatan',
        'tanggal',
    ];
    public $timestamps = false;
}
