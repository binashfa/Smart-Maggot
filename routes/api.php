<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DeviceCommandController;


Route::post('/sensor', [SensorController::class, 'store']);
Route::get('/sensor/latest', [SensorController::class, 'latest']);

Route::get('/device-command/latest', [DeviceCommandController::class, 'latest']);
