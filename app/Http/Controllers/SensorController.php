<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\SensorLog;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        $sensors = SensorLog::latest()->paginate(20);
        return view('sensors.index', compact('sensors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'device_code' => 'required|string',
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'media_moisture' => 'nullable|numeric',
            'status' => 'required|string',
            'recommendation' => 'required|string',
            'fan_status' => 'nullable|string',
        ]);

        $device = Device::firstOrCreate(
            ['device_code' => $validated['device_code']],
            [
                'device_name' => $validated['device_code'],
                'location' => 'Area Budidaya 1',
                'status' => 'online',
            ]
        );

        $sensor = SensorLog::create([
            'device_id' => $device->id,
            'temperature' => $validated['temperature'],
            'humidity' => $validated['humidity'],
            'media_moisture' => $validated['media_moisture'] ?? null,
            'status' => $validated['status'],
            'recommendation' => $validated['recommendation'],
            'fan_status' => $validated['fan_status'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data sensor berhasil disimpan',
            'data' => $sensor,
        ], 201);
    }

    public function latest()
    {
        $latest = SensorLog::with('device')->latest()->first();

        return response()->json([
            'success' => true,
            'data' => $latest,
        ]);
    }

    public function monitoring()
    {
        $sensorLogs = SensorLog::latest()
            ->paginate(9);

        $latest = SensorLog::with('device')
            ->latest()
            ->first();

        $online = false;

        if ($latest) {
            $online = now()->diffInMinutes($latest->created_at) < 2;
        }

        return view(
            'operator.monitoring',
            compact(
                'sensorLogs',
                'latest',
                'online'
            )
        );
    }
}
