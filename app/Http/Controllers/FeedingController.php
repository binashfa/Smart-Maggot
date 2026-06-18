<?php

namespace App\Http\Controllers;

use App\Models\Feeding;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use App\Models\SensorLog;

class FeedingController extends Controller
{
    public function store(Request $request)
    {
        Feeding::create([
            'feed_type' => $request->feed_type,
            'weight' => $request->weight,
            'notes' => $request->notes,
            'feeding_time' => now()
        ]);

        return back()->with('success', 'Pakan berhasil dicatat');
    }

    public function index()
    {
        $feedings = Feeding::latest()->get();
        $lastFeeding = Feeding::latest()->first();

        return view('operator.feeding', compact(
            'feedings',
            'lastFeeding'
        ));
    }

    public function exportPdf()
    {
        $startDate = Carbon::now()->subDays(7);

        $sensorLogs = SensorLog::where(
            'created_at',
            '>=',
            $startDate
        )->get();

        $avgTemperature = round($sensorLogs->avg('temperature'), 2);
        $avgHumidity = round($sensorLogs->avg('humidity'), 2);
        $avgMedia = round($sensorLogs->avg('media_moisture'), 2);

        $maxTemperature = $sensorLogs->max('temperature');
        $minTemperature = $sensorLogs->min('temperature');

        $maxHumidity = $sensorLogs->max('humidity');
        $minHumidity = $sensorLogs->min('humidity');

        $maxMedia = $sensorLogs->max('media_moisture');
        $minMedia = $sensorLogs->min('media_moisture');

        $statusDominan = $sensorLogs
            ->groupBy('status')
            ->sortByDesc(fn($group) => $group->count())
            ->keys()
            ->first();

        $pdf = Pdf::loadView(
            'pdf.monitoring-report',
            compact(
                'sensorLogs',
                'avgTemperature',
                'avgHumidity',
                'avgMedia',
                'maxTemperature',
                'minTemperature',
                'maxHumidity',
                'minHumidity',
                'maxMedia',
                'minMedia',
                'statusDominan'
            )
        );

        return $pdf->download('monitoring-report.pdf');
    }
}
