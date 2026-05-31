<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SensorLog;
<<<<<<< HEAD
use App\Models\DeviceCommand;
=======
>>>>>>> ff9573274746a1751750b181641e03c82211e918

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

<<<<<<< HEAD
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
=======
        // ambil data sensor terbaru
        $latest = SensorLog::latest()->first();

        if ($role == 'superadmin') {
            return view('superadmin.dashboard', compact('latest'));
        }

        if ($role == 'operator') {
            return view('operator.dashboard', compact('latest'));
        }

        return view('user.dashboard', compact('latest'));
>>>>>>> ff9573274746a1751750b181641e03c82211e918
    }
}