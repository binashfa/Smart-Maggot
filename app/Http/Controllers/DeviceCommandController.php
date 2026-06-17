<?php

namespace App\Http\Controllers;

use App\Models\DeviceCommand;
use Illuminate\Http\Request;

class DeviceCommandController extends Controller
{
    public function update(Request $request)
    {
        $device = DeviceCommand::firstOrCreate(
            ['device_code' => 'ESP32-01']
        );

        switch ($request->command) {

            case 'auto_mode':
                $device->mode = 'AUTO';
                break;

            case 'manual_mode':
                $device->mode = 'MANUAL';
                break;

            case 'fan_on':
                $device->fan_status = 'on';
                break;

            case 'fan_off':
                $device->fan_status = 'off';
                break;

            case 'led_green_on':
                $device->led_green_status = 'on';
                break;

            case 'led_green_off':
                $device->led_green_status = 'off';
                break;

            case 'led_red_on':
                $device->led_red_status = 'on';
                break;

            case 'led_red_off':
                $device->led_red_status = 'off';
                break;

            case 'buzzer_on':
                $device->buzzer_status = 'on';
                break;

            case 'buzzer_off':
                $device->buzzer_status = 'off';
                break;

            case 'buzzer_mute':
                $device->buzzer_status = 'off';
                break;

            case 'buzzer_unmute':
                $device->buzzer_status = 'on';
                break;
        }

        $device->command = $request->command;
        $device->save();

        return back();
    }

    public function latest()
    {
        $device = DeviceCommand::where(
            'device_code',
            'ESP32-01'
        )->first();

        return response()->json([
            'mode' => $device?->mode ?? 'AUTO',
            'command' => $device?->command ?? ''
        ]);
    }
}
