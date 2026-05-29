<?php

namespace App\Services;

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

class MqttService
{
    protected $mqtt;

    public function connect()
    {
        $server   = env('MQTT_HOST', 'broker.hivemq.com');
        $port     = env('MQTT_PORT', 1883);
        $clientId = env('MQTT_CLIENT_ID', 'laravel-client-' . uniqid());

        $connectionSettings = (new ConnectionSettings);

        $this->mqtt = new MqttClient(
            $server,
            $port,
            $clientId
        );

        $this->mqtt->connect($connectionSettings);

        return $this->mqtt;
    }

    public function publish($topic, $message)
    {
        $this->connect();

        $this->mqtt->publish($topic, $message);

        $this->mqtt->disconnect();
    }
}