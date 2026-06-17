@extends('layouts.operator')

@section('content')

<div class="space-y-6">

    <div class="rounded-3xl bg-white p-6 shadow-md mb-2">
        <div class="flex items-center justify-between ">

            <div>
                <h1 class="text-3xl font-black text-[#12557B]">
                    Monitoring Sensor
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Riwayat data suhu, kelembapan udara, dan media maggot.
                </p>
            </div>


            <div class="stat-card" style="font-family:'Sora',sans-serif;background:#fff;border:.5px solid #e5e7eb;border-radius:12px;padding:.7rem .9rem;width:145px;position:relative;overflow:hidden;">

                <div style="position:absolute;top:0;left:0;right:0;height:2px;background:#10828D;border-radius:12px 12px 0 0;"></div>

                <p style="font-size:8px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:#6b7280;margin:0 0 4px;">
                    Total Data
                </p>

                <div style="display:flex;align-items:flex-end;justify-content:space-between;gap:8px;">

                    <div>
                        <h2 style="font-size:22px;font-weight:800;color:#10828D;line-height:1;margin:0;">
                            {{ $sensorLogs->total() }}
                        </h2>

                        <p style="font-size:9px;color:#9ca3af;margin-top:2px;">
                            Sensor logs
                        </p>
                    </div>

                    <div style="width:38px;height:38px;border-radius:12px;background:#E1F5EE;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fi fi-rr-database" style="font-size:18px;color:#10828D;"></i>
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