<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artikel_id',
    ];

    public $timestamps = false;
}
