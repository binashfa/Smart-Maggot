<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feeding extends Model
{
    protected $fillable = [
        'feed_type',
        'weight',
        'notes',
        'feeding_time'
    ];
}
