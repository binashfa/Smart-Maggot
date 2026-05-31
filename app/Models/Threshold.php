<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Threshold extends Model
{
    protected $fillable = [
        'min_suhu',
        'max_suhu',
        'min_kelembapan',
        'max_kelembapan'
    ];
}