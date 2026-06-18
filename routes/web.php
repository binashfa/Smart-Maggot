<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DeviceCommandController;
use App\Http\Controllers\FeedingController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::view('/', 'welcome');

Route::middleware(['role:operator'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
    Route::post('/device-command/send', [DeviceCommandController::class, 'update'])->name('device-command.send');
    Route::get('/monitoring', [SensorController::class, 'monitoring'])->name('monitoring');
    Route::post('/device-control/fan', [DeviceCommandController::class, 'update'])->name('device-control.fan');

    Route::post('/feeding/store', [FeedingController::class, 'store'])->name('feeding.store');
    Route::get('/feeding', [FeedingController::class, 'index'])->name('feeding.index');

    Route::get('/monitoring/export-pdf',[FeedingController::class, 'exportPdf'])->name('monitoring.export.pdf');
});

Route::middleware(['role:user'])->group(function () {
    Route::get('/user-dashboard', [DashboardController::class, 'index']);
});
