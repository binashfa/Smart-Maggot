@extends('layouts.superadmin')

@section('content')

<div class="space-y-6">

    <div class="rounded-3xl bg-[#EBE7DA] p-6 shadow-xl">
        <h1 class="text-3xl font-black text-[#2E2E2E]">Monitoring Sensor</h1>
        <p class="text-sm text-[#2E2E2E]/60 mt-2">
            Riwayat data suhu, kelembapan udara, dan kelembapan media dari ESP32.
        </p>
    </div>

    <div class="rounded-3xl bg-white/80 p-6 shadow-xl overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-gray-200 text-sm text-gray-500">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Device</th>
                    <th class="py-3 px-4">Suhu</th>
                    <th class="py-3 px-4">Humidity</th>
                    <th class="py-3 px-4">Media</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Rekomendasi</th>
                    <th class="py-3 px-4">Waktu</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($sensors as $index => $sensor)
                    <tr class="border-b border-gray-100 hover:bg-[#E9F056]/20 transition">
                        <td class="py-4 px-4 font-bold">
                            {{ $sensors->firstItem() + $index }}
                        </td>

                        <td class="py-4 px-4">
                            {{ $sensor->device->device_name ?? 'ESP32-01' }}
                        </td>

                        <td class="py-4 px-4 font-black text-[#FF5C34]">
                            {{ $sensor->temperature }}°C
                        </td>

                        <td class="py-4 px-4 font-black text-[#35516E]">
                            {{ $sensor->humidity }}%
                        </td>

                        <td class="py-4 px-4 font-black text-[#2E2E2E]">
                            {{ $sensor->media_moisture }}%
                        </td>

                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full text-xs font-black
                                {{ $sensor->status == 'Normal' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $sensor->status }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            {{ $sensor->recommendation }}
                        </td>

                        <td class="py-4 px-4 text-sm text-gray-500">
                            {{ $sensor->created_at->format('d M Y H:i:s') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="py-8 text-center text-gray-500">
                            Belum ada data sensor.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-6">
            {{ $sensors->links() }}
        </div>
    </div>

</div>

@endsection