@extends('layouts.superadmin')

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

    $chartLabels = $chartData->pluck('created_at')->map(fn ($date) => $date->format('H:i:s'))->values();
    $temperatureData = $chartData->pluck('temperature')->values();
    $humidityData = $chartData->pluck('humidity')->values();
    $mediaData = $chartData->pluck('media_moisture')->values();
@endphp

<div class="space-y-6">

    {{-- SENSOR CARDS --}}
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">

        {{-- TEMPERATURE --}}
        <div class="relative overflow-hidden rounded-3xl bg-[#FF5C34] p-6 text-white shadow-2xl">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-white/80">Temperature</p>
                    <h1 class="mt-4 text-4xl font-black">{{ $temperature }}°C</h1>
                    <p class="mt-2 text-xs text-white/70">{{ $status }}</p>
                </div>

                <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white/20 shadow-lg">
                    <i class="fi fi-rr-temperature-high text-[34px] text-white"></i>
                </div>
            </div>

            <div class="mt-10">
                <div class="h-2 w-full rounded-full bg-white/20">
                    <div class="h-2 rounded-full bg-white" style="width: {{ $temperatureWidth }}%;"></div>
                </div>
            </div>
        </div>

        {{-- HUMIDITY --}}
        <div class="relative overflow-hidden rounded-3xl bg-[#D7EFFF] p-6 shadow-2xl">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-[#2E2E2E]/70">Humidity</p>
                    <h1 class="mt-4 text-4xl font-black text-[#35516E]">{{ $humidity }}%</h1>
                    <p class="mt-2 text-xs text-[#35516E]/70">Kelembapan udara</p>
                </div>

                <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white/60 shadow-lg">
                    <i class="fi fi-rr-raindrops text-[34px] text-[#35516E]"></i>
                </div>
            </div>

            <div class="mt-10">
                <div class="h-2 w-full rounded-full bg-white/60">
                    <div class="h-2 rounded-full bg-[#35516E]" style="width: {{ $humidityWidth }}%;"></div>
                </div>
            </div>
        </div>

        {{-- MEDIA MOISTURE --}}
        <div class="relative overflow-hidden rounded-3xl bg-[#E9F056] p-6 shadow-2xl">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-[#2E2E2E]/70">Media Moisture</p>
                    <h1 class="mt-4 text-4xl font-black text-[#2E2E2E]">{{ $media }}%</h1>
                    <p class="mt-2 text-xs text-[#2E2E2E]/70">Kelembapan media</p>
                </div>

                <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white/60 shadow-lg">
                    <i class="fi fi-rr-seedling text-[34px] text-[#2E2E2E]"></i>
                </div>
            </div>

            <div class="mt-10">
                <div class="h-2 w-full rounded-full bg-white/40">
                    <div class="h-2 rounded-full bg-[#2E2E2E]" style="width: {{ $mediaWidth }}%;"></div>
                </div>
            </div>
        </div>

    </div>

    {{-- MONITORING --}}
    <div class="overflow-hidden rounded-3xl bg-[#351E28] p-5 shadow-2xl">

        <div class="mb-6 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FF5C34] shadow-lg">
                    <i class="fi fi-rr-sensor text-lg text-white"></i>
                </div>

                <div>
                    <h1 class="text-lg font-black leading-none text-white">
                        Realtime Monitoring
                    </h1>
                    <p class="mt-1 text-[10px] text-white/60">
                        {{ $deviceName }} - update terakhir: {{ $lastUpdate }}
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <div class="rounded-xl bg-[#E9F056] px-4 py-2 text-[10px] font-black text-[#2E2E2E] shadow-lg">
                    {{ $status }}
                </div>

                <div class="rounded-xl px-4 py-2 text-[10px] font-black shadow-lg {{ $online ? 'bg-green-400 text-green-900' : 'bg-red-400 text-white' }}">
                    {{ $deviceStatus }}
                </div>
            </div>
        </div>

        {{-- DETAIL SENSOR --}}
        <div class="rounded-3xl bg-[#EBE7DA] p-6">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">

                <div class="rounded-2xl bg-white/70 p-5">
                    <p class="text-xs font-bold text-[#2E2E2E]/60">Suhu</p>
                    <h2 class="mt-2 text-3xl font-black text-[#2E2E2E]">{{ $temperature }}°C</h2>
                </div>

                <div class="rounded-2xl bg-white/70 p-5">
                    <p class="text-xs font-bold text-[#2E2E2E]/60">Kelembapan Udara</p>
                    <h2 class="mt-2 text-3xl font-black text-[#2E2E2E]">{{ $humidity }}%</h2>
                </div>

                <div class="rounded-2xl bg-white/70 p-5">
                    <p class="text-xs font-bold text-[#2E2E2E]/60">Kelembapan Media</p>
                    <h2 class="mt-2 text-3xl font-black text-[#2E2E2E]">{{ $media }}%</h2>
                </div>

                <div class="rounded-2xl bg-white/70 p-5">
                    <p class="text-xs font-bold text-[#2E2E2E]/60">Fan Status</p>
                    <h2 class="mt-2 text-3xl font-black text-[#2E2E2E]">{{ $fanStatus }}</h2>
                </div>

                <div class="rounded-2xl bg-white/70 p-5">
                    <p class="text-xs font-bold text-[#2E2E2E]/60">Rekomendasi</p>
                    <h2 class="mt-2 text-lg font-black text-[#2E2E2E]">{{ $recommendation }}</h2>
                </div>

            </div>
        </div>

        {{-- CONTROL DEVICE --}}
        <div class="mt-6 rounded-3xl bg-white/90 p-6">
            <div class="mb-4 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-xl font-black text-[#2E2E2E]">Control Device</h2>
                    <p class="text-xs text-[#2E2E2E]/60">Kontrol manual fan dari dashboard</p>
                </div>

                <div class="w-fit rounded-xl px-4 py-2 text-xs font-black {{ $manualFanStatus === 'ON' ? 'bg-green-400 text-green-900' : 'bg-red-400 text-white' }}">
                    FAN {{ $manualFanStatus }}
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <form action="{{ route('device-control.fan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="fan_status" value="ON">

                    <button
                        type="submit"
                        class="rounded-2xl bg-green-500 px-6 py-3 text-sm font-black text-white shadow-lg transition hover:scale-105"
                    >
                        Nyalakan Fan
                    </button>
                </form>

                <form action="{{ route('device-control.fan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="fan_status" value="OFF">

                    <button
                        type="submit"
                        class="rounded-2xl bg-red-500 px-6 py-3 text-sm font-black text-white shadow-lg transition hover:scale-105"
                    >
                        Matikan Fan
                    </button>
                </form>
            </div>
        </div>

        {{-- CHART --}}
        <div class="mt-6 rounded-3xl bg-white/90 p-6">
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-black text-[#2E2E2E]">Grafik Sensor</h2>
                    <p class="text-xs text-[#2E2E2E]/60">10 data terakhir dari ESP32</p>
                </div>
            </div>

            <canvas id="sensorChart" height="100"></canvas>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const labels = @json($chartLabels);
    const temperatureData = @json($temperatureData);
    const humidityData = @json($humidityData);
    const mediaData = @json($mediaData);

    const chartElement = document.getElementById('sensorChart');

    if (chartElement) {
        new Chart(chartElement, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Suhu (°C)',
                        data: temperatureData,
                        borderWidth: 3,
                        tension: 0.4
                    },
                    {
                        label: 'Kelembapan Udara (%)',
                        data: humidityData,
                        borderWidth: 3,
                        tension: 0.4
                    },
                    {
                        label: 'Kelembapan Media (%)',
                        data: mediaData,
                        borderWidth: 3,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
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

    setTimeout(() => {
        window.location.reload();
    }, 5000);
</script>
@endsection