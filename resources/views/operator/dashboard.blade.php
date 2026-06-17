@extends('layouts.operator')

@section('content')
@php
$temperature = $latest?->temperature ?? 0;
$humidity = $latest?->humidity ?? 0;
$media = $latest?->media_moisture ?? 0;
$status = $latest?->status ?? 'Belum ada data';
$recommendation = $latest?->recommendation ?? 'Belum ada rekomendasi';
$deviceName = $latest?->device?->device_name ?? 'ESP32-01';
$lastUpdate = $latest?->created_at?->format('d M Y H:i:s') ?? '-';

$temperatureWidth = min(max($temperature * 2, 0), 100);
$humidityWidth = min(max($humidity, 0), 100);
$mediaWidth = min(max($media, 0), 100);

$deviceStatus = $online ? 'ONLINE' : 'OFFLINE';
$fanStatus = $latest?->fan_status ?? 'OFF';
$manualFanStatus = $command?->fan_status ?? 'OFF';

$chartLabels = $chartData->pluck('created_at')
->map(fn ($date) => $date->format('H:i:s'))
->values();

$temperatureData = $chartData->pluck('temperature')->values();
$humidityData = $chartData->pluck('humidity')->values();
$mediaData = $chartData->pluck('media_moisture')->values();
@endphp

<div class="rounded-[36px] bg-white p-6 shadow-md mb-4">

    <!-- HEADER -->
    <div class="flex items-center justify-between">

        <!-- LEFT -->
        <div>
            <h1 class="text-4xl font-black text-[#12557B]">
                Hello, Operator
            </h1>

            <p class="text-sm text-[#5B5B5B] mt-2">
                Welcome back to SmartMaggot Dashboard
            </p>
        </div>

        <div class="grid grid-cols-3 gap-4 mt-5">

            <div class="bg-[#10828D] rounded-2xl p-4 flex items-center justify-between text-white">
                <div>
                    <p class="text-xs opacity-80">Temperature</p>
                    <h2 class="text-2xl font-black">{{ $latest->temperature ?? 0 }}°C</h2>
                </div>
                <i class="fi fi-rr-temperature-high text-3xl"></i>
            </div>

            <div class="bg-[#12557B] rounded-2xl p-4 flex items-center justify-between text-white">
                <div>
                    <p class="text-xs opacity-80">Humidity</p>
                    <h2 class="text-2xl font-black">{{ $latest->humidity ?? 0 }}%</h2>
                </div>
                <i class="fi fi-rr-raindrops text-3xl"></i>
            </div>

            <div class="bg-[#A3E062] rounded-2xl p-4 flex items-center justify-between">
                <div>
                    <p class="text-xs text-[#12557B]">Media</p>
                    <h2 class="text-2xl font-black text-[#12557B]">{{ $media ?? 0 }}%</h2>
                </div>
                <i class="fi fi-rr-leaf text-3xl text-[#12557B]"></i>
            </div>

        </div>


    </div>

</div>

{{-- DETAIL SENSOR --}}
<div class="rounded-3xl p-2">
    <div class="grid h-[calc(100vh-260px)] grid-cols-12 gap-4">

        <!-- MONITORING -->
        <div class="col-span-4 rounded-3xl bg-[#12557B] p-4">

            <!-- HEADER -->
            <div class="mb-4 flex items-center justify-between">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#10828D]">
                        <i class="fi fi-rr-sensor text-white"></i>
                    </div>

                    <div>
                        <h1 class="text-lg font-black text-white">
                            Realtime Monitoring
                        </h1>

                        <p class="text-[10px] text-white/70">
                            {{ $deviceName }}
                        </p>
                    </div>

                </div>

                <div class="rounded-xl bg-[#A3E062] px-3 py-2 text-[10px] font-black text-[#12557B]">
                    {{ $status }}
                </div>

            </div>

            <!-- STATUS DEVICE -->
            <div class="mb-4 rounded-2xl bg-white p-3">

                <div class="flex items-center justify-between">

                    <span class="text-xs font-bold text-[#12557B]">
                        Device Status
                    </span>

                    <span class="rounded-lg px-3 py-1 text-xs font-bold
                    {{ $online ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
                        {{ $deviceStatus }}
                    </span>

                </div>

                <p class="mt-2 text-[11px] text-gray-500">
                    Update terakhir : {{ $lastUpdate }}
                </p>

            </div>

            <!-- SENSOR INFO -->
            <div class="grid grid-cols-2 gap-3">

                <div class="rounded-2xl bg-white p-4">
                    <p class="text-xs text-gray-500">
                        Suhu
                    </p>

                    <h2 class="mt-1 text-2xl font-black text-[#10828D]">
                        {{ $temperature }}°C
                    </h2>
                </div>

                <div class="rounded-2xl bg-white p-4">
                    <p class="text-xs text-gray-500">
                        Humidity
                    </p>

                    <h2 class="mt-1 text-2xl font-black text-[#12557B]">
                        {{ $humidity }}%
                    </h2>
                </div>

                <div class="rounded-2xl bg-white p-4">
                    <p class="text-xs text-gray-500">
                        Media
                    </p>

                    <h2 class="mt-1 text-2xl font-black text-[#A3E062]">
                        {{ $media }}%
                    </h2>
                </div>

                <div class="rounded-2xl bg-white p-4">
                    <p class="text-xs text-gray-500">
                        Fan
                    </p>

                    <h2 class="mt-1 text-2xl font-black text-[#12557B]">
                        {{ $fanStatus }}
                    </h2>
                </div>

            </div>

            <!-- REKOMENDASI -->
            <div class="mt-4 rounded-2xl bg-white p-4">

                <p class="text-xs font-bold text-gray-500">
                    Recommendation
                </p>

                <p class="mt-2 text-sm font-semibold text-[#12557B]">
                    {{ $recommendation }}
                </p>

            </div>

        </div>

        <!-- CHART -->
        <div class="col-span-8 rounded-3xl bg-white p-5 shadow-md">

            <div class="mb-4">

                <h2 class="text-xl font-black text-[#12557B]">
                    Grafik Sensor
                </h2>

                <p class="text-xs text-gray-500">
                    10 data terakhir dari ESP32
                </p>

            </div>

            <div class="h-[400px]">
                <canvas id="sensorChart"></canvas>
            </div>

        </div>

    </div>
</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script id="chart-data" type="application/json">
{!! json_encode([
    'labels' => $chartLabels,
    'temperature' => $temperatureData,
    'humidity' => $humidityData,
    'media' => $mediaData
]) !!}
</script>

<script>
    const chartData = JSON.parse(
        document.getElementById('chart-data').textContent
    );

    const labels = chartData.labels;
    const temperatureData = chartData.temperature;
    const humidityData = chartData.humidity;
    const mediaData = chartData.media;

    const chartElement = document.getElementById('sensorChart');

    if (chartElement) {
        new Chart(chartElement, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Suhu (°C)',
                    data: temperatureData,
                    borderColor: '#10828D',
                    backgroundColor: '#10828D',
                    borderWidth: 3,
                    tension: 0.4
                }, {
                    label: 'Kelembapan Udara (%)',
                    data: humidityData,
                    borderColor: '#12557B',
                    backgroundColor: '#12557B',
                    borderWidth: 3,
                    tension: 0.4
                }, {
                    label: 'Kelembapan Media (%)',
                    data: mediaData,
                    borderColor: '#A3E062',
                    backgroundColor: '#A3E062',
                    borderWidth: 3,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>
@endsection