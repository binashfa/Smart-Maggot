<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'device_code',
        'device_name',
        'location',
        'status',
        'last_online'
    ];

    public function sensorData()
    {
        return $this->hasMany(SensorData::class);
    }
}