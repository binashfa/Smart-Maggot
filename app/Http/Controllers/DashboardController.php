<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SensorLog;
use App\Models\DeviceCommand;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        $latest = SensorLog::with('device')->latest()->first();

        $online = false;

        if ($latest) {
            $online = now()->diffInMinutes($latest->created_at) < 2;
        }

        $chartData = SensorLog::latest()
            ->take(10)
            ->get()
            ->reverse()
            ->values();

        $command = DeviceCommand::where('device_code', 'ESP32-01')
            ->latest()
            ->first();

        if ($role == 'superadmin') {
            return view('superadmin.dashboard', compact('latest', 'online', 'chartData', 'command'));
        }

        if ($role == 'operator') {
            return view('operator.dashboard', compact('latest', 'online', 'chartData', 'command'));
        }

        return view('user.dashboard', compact('latest', 'online', 'chartData', 'command'));
    }
}