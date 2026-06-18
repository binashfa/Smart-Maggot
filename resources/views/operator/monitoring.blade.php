@extends('layouts.operator')

@section('content')

<div class="space-y-6">

    <div class="rounded-3xl bg-white p-6 shadow-md mb-2">
        <div class="flex items-center justify-between">

            <!-- LEFT -->
            <div>
                <h1 class="text-3xl font-black text-[#12557B]">
                    Monitoring Sensor
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Riwayat data suhu, kelembapan udara, dan media maggot.
                </p>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-3">

                <a href="{{ route('monitoring.export.pdf') }}"
                    class="flex items-center gap-2 rounded-xl bg-[#12557B] px-4 py-3 text-sm font-bold text-white hover:bg-[#0f4868] transition">

                    <i class="fi fi-rr-file-pdf"></i>
                    Export PDF

                </a>

                <div class="bg-white border border-gray-200 rounded-xl px-4 py-3 min-w-[150px]">

                    <p class="text-[10px] font-semibold uppercase tracking-widest text-gray-400">
                        Total Data
                    </p>

                    <div class="flex items-center justify-between mt-1">

                        <div>
                            <h2 class="text-2xl font-black text-[#10828D] leading-none">
                                {{ $sensorLogs->total() }}
                            </h2>

                            <p class="text-[10px] text-gray-400 mt-1">
                                Sensor Logs
                            </p>
                        </div>

                        <div class="w-10 h-10 rounded-xl bg-[#E1F5EE] flex items-center justify-center">
                            <i class="fi fi-rr-database text-[#10828D] text-lg"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="rounded-3xl bg-white shadow-md overflow-hidden">


    <table class="w-full text-left">

        <thead class="bg-[#E1F5EE]/80">
            <tr>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">No</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Device</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Suhu</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Humidity</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Media</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Status</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Rekomendasi</th>
                <th class="px-5 py-4 text-[11px] font-extrabold uppercase tracking-widest text-[#12557B]">Waktu</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($sensorLogs as $index => $sensor)
            <tr class="border-t border-gray-100 hover:bg-[#E1F5EE]/40 transition-all duration-200">

                <td class="px-5 py-3 text-xs font-semibold text-[#12557B]">
                    {{ $sensorLogs->firstItem() + $index }}
                </td>

                <td class="px-5 py-3 text-xs text-gray-700">
                    {{ $sensor->device->device_name ?? 'ESP32-01' }}
                </td>

                <td class="px-5 py-3">
                    <span class="text-xs font-bold text-[#10828D]">
                        {{ $sensor->temperature }}°C
                    </span>
                </td>

                <td class="px-5 py-3">
                    <span class="text-xs font-bold text-[#12557B]">
                        {{ $sensor->humidity }}%
                    </span>
                </td>

                <td class="px-5 py-3">
                    <span class="text-xs font-bold text-[#6FAF2F]">
                        {{ $sensor->media_moisture }}%
                    </span>
                </td>

                <td class="px-5 py-3">
                    <span class="px-2 py-1 rounded-full text-[10px] font-medium
                {{ str_contains(strtolower($sensor->status), 'normal')
                ? 'bg-green-50 text-green-700 border border-green-200'
                : 'bg-yellow-50 text-yellow-700 border border-yellow-200' }}">
                        {{ $sensor->status }}
                    </span>
                </td>

                <td class="px-5 py-3 text-xs text-gray-600">
                    {{ $sensor->recommendation }}
                </td>

                <td class="px-5 py-3 text-xs text-gray-500 whitespace-nowrap">
                    {{ $sensor->created_at->format('d M Y H:i:s') }}
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="8" class="py-8 text-center text-sm text-gray-400">
                    Belum ada data sensor.
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>

    <div class="border-t border-gray-100 px-5 py-4 bg-[#FAFAFA]">
        {{ $sensorLogs->links() }}
    </div>

</div>


@endsection