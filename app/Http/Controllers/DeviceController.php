<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceCommand;

class DeviceController extends Controller
{
    public function index()
    {
        $current = DeviceCommand::where(
            'device_code',
            'ESP32-01'
        )->first();

        return view(
            'operator.devices',
            [
                'currentMode'  => $current?->mode ?? 'AUTO',
                'stateFan'     => $current?->fan_status ?? 'off',
                'stateLedGreen' => $current?->led_green_status ?? 'off',
                'stateLedRed'  => $current?->led_red_status ?? 'off',
                'stateBuzzer'  => $current?->buzzer_status ?? 'off',
            ]
        );
    }

    public function sendCommand(Request $request)
    {
        DeviceCommand::create([
            'device_code' => 'ESP32-01',
            'command' => $request->command
        ]);

        return back()->with('success', 'Command berhasil dikirim');
    }

    public function latest()
    {
        $command = DeviceCommand::latest()->first();

        return response()->json([
            'command' => $command?->command ?? 'auto_mode'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'command' => 'required|string',
        ]);

        DeviceCommand::updateOrCreate(
            ['device_code' => 'ESP32-01'],
            [
                'command' => $request->command,
                'mode' => $request->command == 'manual_mode'
                    ? 'MANUAL'
                    : ($request->command == 'auto_mode'
                        ? 'AUTO'
                        : DeviceCommand::where('device_code', 'ESP32-01')->value('mode'))
            ]
        );

        return back();
    }
}
