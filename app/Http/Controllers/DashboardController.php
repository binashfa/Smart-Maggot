<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\SensorData;

class DashboardController extends Controller
{
    public function index()
    {
        $latestSensor = SensorData::latest()->first();

        $totalDevices = Device::count();

        $onlineDevices = Device::where('status', 'online')->count();

        $latestData = SensorData::latest()
                        ->take(5)
                        ->get();

        return view('dashboard.index', compact(
            'latestSensor',
            'totalDevices',
            'onlineDevices',
            'latestData'
        ));
    }
}