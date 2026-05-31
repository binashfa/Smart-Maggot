<?php

namespace App\Http\Controllers;

use App\Models\DeviceCommand;
use Illuminate\Http\Request;

class DeviceCommandController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'fan_status' => 'required|in:ON,OFF',
        ]);

        $command = DeviceCommand::updateOrCreate(
            ['device_code' => 'ESP32-01'],
            [
                'fan_status' => $request->fan_status,
                'mode' => 'manual',
            ]
        );

        return back()->with('success', 'Fan berhasil diubah ke ' . $command->fan_status);
    }

    public function latest()
    {
        $command = DeviceCommand::where('device_code', 'ESP32-01')->latest()->first();

        if (!$command) {
            $command = DeviceCommand::create([
                'device_code' => 'ESP32-01',
                'fan_status' => 'OFF',
                'mode' => 'manual',
            ]);
        }

        return response()->json([
            'success' => true,
            'device_code' => $command->device_code,
            'fan_status' => $command->fan_status,
            'mode' => $command->mode,
        ]);
    }
}