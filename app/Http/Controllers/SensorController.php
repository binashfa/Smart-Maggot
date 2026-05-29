<?php

namespace App\Http\Controllers;

use App\Models\SensorLog;

class SensorController extends Controller
{
    public function index()
    {
        $sensors = SensorLog::latest()->paginate(20);

        return view('sensors.index', compact('sensors'));
    }
}