<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DeviceCommandController;

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'loginProcess']);

Route::post('/logout', [AuthController::class, 'logout']);


Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['role:superadmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('devices', DeviceController::class);
});

Route::middleware(['role:operator'])->group(function () {

    Route::get('/operator', function () {
        return 'Halaman Operator';
    });
});

Route::middleware(['role:user'])->group(function () {

    Route::get('/user', function () {
        return 'Halaman User';
    });
});

Route::get('/monitoring', [SensorController::class, 'monitoring'])->name('monitoring');

Route::post('/device-control/fan', [DeviceCommandController::class, 'update'])
    ->name('device-control.fan');
