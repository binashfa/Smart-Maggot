<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'nama_device',
        'topic_mqtt',
        'lokasi',
        'status'
    ];
}