<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorLog extends Model
{
    protected $table = 'sensor_data';

    protected $fillable = [
        'device_id',
        'suhu',
        'kelembapan'
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}