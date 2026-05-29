<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();

        return view('devices.index', compact('devices'));
    }

    public function store(Request $request)
    {
        Device::create($request->all());

        return back()->with('success', 'Device berhasil ditambahkan');
    }
}