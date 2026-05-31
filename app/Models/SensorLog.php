<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorLog extends Model
{
    protected $table = 'sensor_data';

    protected $fillable = [
        'device_id',
        'temperature',
        'humidity',
        'media_moisture',
        'status',
        'recommendation',
        'fan_status',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}