<?php

namespace App\Http\Controllers;

use App\Services\MqttService;

class ControlController extends Controller
{
    public function fanOn(MqttService $mqtt)
    {
        $mqtt->publish('device/fan', 'ON');

        return back()->with('success', 'Fan dinyalakan');
    }

    public function fanOff(MqttService $mqtt)
    {
        $mqtt->publish('device/fan', 'OFF');

        return back()->with('success', 'Fan dimatikan');
    }
}