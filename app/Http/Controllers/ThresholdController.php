<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Threshold;

class ThresholdController extends Controller
{
    public function update(Request $request)
    {
        Threshold::updateOrCreate(
            ['id' => 1],
            [
                'min_suhu' => $request->min_suhu,
                'max_suhu' => $request->max_suhu,
                'min_kelembapan' => $request->min_kelembapan,
                'max_kelembapan' => $request->max_kelembapan,
            ]
        );

        return back()->with('success', 'Threshold berhasil diupdate');
    }
}