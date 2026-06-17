<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceCommand extends Model
{
    protected $fillable = [
        'device_code',
        'command',
        'mode',
        'fan_status',
        'led_green_status',
        'led_red_status',
        'buzzer_status',
    ];
}