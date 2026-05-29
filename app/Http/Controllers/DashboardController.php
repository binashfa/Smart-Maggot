<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SensorLog;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        // ambil data sensor terbaru
        $latest = SensorLog::latest()->first();

        if ($role == 'superadmin') {
            return view('superadmin.dashboard', compact('latest'));
        }

        if ($role == 'operator') {
            return view('operator.dashboard', compact('latest'));
        }

        return view('user.dashboard', compact('latest'));
    }
}