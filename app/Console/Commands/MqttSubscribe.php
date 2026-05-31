<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\MqttClient;
use App\Models\SensorLog;
use App\Models\Device;

class MqttSubscribe extends Command
{
    protected $signature = 'mqtt:listen';

    protected $description = 'Listen MQTT Sensor';

    public function handle()
    {
        $mqtt = new MqttClient(
            env('MQTT_HOST', 'broker.hivemq.com'),
            env('MQTT_PORT', 1883),
            'laravel-subscriber'
        );

        $mqtt->connect();

        $mqtt->subscribe('sensor/data', function ($topic, $message) {

            $data = json_decode($message, true);

            if (!$data) {
                return;
            }

            $device = Device::find($data['device_id']);

            if (!$device) {
                return;
            }

            SensorLog::create([
                'device_id'   => $device->id,
                'suhu'        => $data['suhu'],
                'kelembapan'  => $data['kelembapan']
            ]);

            echo "Data sensor masuk\n";

        }, 0);

        $mqtt->loop(true);

        $mqtt->disconnect();
    }
}