<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SensorLog;
use App\Models\DeviceCommand;

class DashboardController extends Controller
{
    public function index()
    {
        // ambil role user login
        $role = Auth::user()->role;

        // ambil data sensor terbaru
        $latest = SensorLog::with('device')
            ->latest()
            ->first();

        // cek status online device
        $online = false;

        if ($latest) {
            $online = $latest->created_at->gt(
                now()->subMinutes(1)
            );
        }

        // data chart 10 data terakhir
        $chartData = SensorLog::latest()
            ->take(10)
            ->get()
            ->reverse()
            ->values();

        // ambil command fan terbaru
        $command = DeviceCommand::where('device_code', 'ESP32-01')
            ->latest()
            ->first();

        // dashboard operator
        if ($role == 'operator') {
            return view(
                'operator.dashboard',
                compact(
                    'latest',
                    'online',
                    'chartData',
                    'command'
                )
            );
        }

        // dashboard user biasa
        return view(
            'user.dashboard',
            compact(
                'latest',
                'online',
                'chartData',
                'command'
            )
        );
    }
}
