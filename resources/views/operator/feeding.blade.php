@extends('layouts.operator')

@section('content')

<div class="mt-6 mx-auto">

    <div class="bg-white rounded-[24px] border border-gray-100 p-8 shadow-sm">

        <!-- HEADER -->
        <div class="flex items-center justify-between mb-8">

            <div class="flex items-center gap-3">

                <div class="w-12 h-12 rounded-2xl bg-green-50 flex items-center justify-center">
                    <i class="fi fi-rr-leaf text-green-700 text-xl"></i>
                </div>

                <div>
                    <h1 class="text-xl font-black text-gray-900">
                        Feeding Summary
                    </h1>

                    <p class="text-sm text-gray-400">
                        Ringkasan pemberian pakan maggot
                    </p>
                </div>

            </div>

            <button
                onclick="openFeedingModal()"
                class="px-5 py-3 rounded-2xl bg-[#A3E062] text-[#12557B] font-bold hover:brightness-95 transition">

                + Tambah Pakan

            </button>

        </div>

        <!-- STATISTIC -->
        <div class="grid grid-cols-3 gap-4 mb-6">

            <div class="bg-green-50 rounded-2xl p-5">

                <p class="text-xs text-green-700 font-semibold">
                    Pakan Terakhir
                </p>

                <h2 class="mt-2 text-2xl font-black text-green-900">
                    {{ $lastFeeding->weight ?? 0 }} Kg
                </h2>

            </div>

            <div class="bg-blue-50 rounded-2xl p-5">

                <p class="text-xs text-blue-700 font-semibold">
                    Total Riwayat
                </p>

                <h2 class="mt-2 text-2xl font-black text-blue-900">
                    {{ $feedings->count() }}
                </h2>

            </div>

            <div class="bg-amber-50 rounded-2xl p-5">

                <p class="text-xs text-amber-700 font-semibold">
                    Jenis Terakhir
                </p>

                <h2 class="mt-2 text-lg font-black text-amber-900 truncate">
                    {{ $lastFeeding->feed_type ?? '-' }}
                </h2>

            </div>

        </div>

        <!-- LAST FEEDING -->
        <div class="bg-gradient-to-r from-[#10828D] to-[#12557B] rounded-3xl p-6 text-white mb-6">

            <p class="text-white/70 text-sm">
                Feeding Activity
            </p>

            <h2 class="text-3xl font-black mt-2">
                {{ $lastFeeding->feed_type ?? 'Belum Ada Data' }}
            </h2>

            <div class="flex items-center justify-between mt-6">

                <div>
                    <p class="text-white/70 text-xs">
                        Berat
                    </p>

                    <p class="text-2xl font-black">
                        {{ $lastFeeding->weight ?? 0 }} Kg
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-white/70 text-xs">
                        Waktu
                    </p>

                    <p class="font-semibold">
                        {{ $lastFeeding ? \Carbon\Carbon::parse($lastFeeding->feeding_time)->format('d M Y H:i') : '-' }}
                    </p>
                </div>

            </div>

        </div>

        <!-- HISTORY -->
        <div>

            <div class="flex items-center justify-between mb-4">

                <h2 class="font-bold text-lg text-[#12557B]">
                    Riwayat Pakan
                </h2>

            </div>

            <div class="overflow-hidden rounded-2xl border border-gray-100">

                <table class="w-full">

                    <thead class="bg-gray-50">

                        <tr>

                            <th class="text-left px-5 py-4 text-xs font-bold text-gray-500">
                                Tanggal
                            </th>

                            <th class="text-left px-5 py-4 text-xs font-bold text-gray-500">
                                Jenis Pakan
                            </th>

                            <th class="text-left px-5 py-4 text-xs font-bold text-gray-500">
                                Berat
                            </th>

                            <th class="text-left px-5 py-4 text-xs font-bold text-gray-500">
                                Catatan
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($feedings as $feeding)

                        <tr class="border-t border-gray-100 hover:bg-gray-50">

                            <td class="px-5 py-4 text-sm text-gray-600">
                                {{ \Carbon\Carbon::parse($feeding->feeding_time)->format('d M Y H:i') }}
                            </td>

                            <td class="px-5 py-4 font-semibold text-[#12557B]">
                                {{ $feeding->feed_type }}
                            </td>

                            <td class="px-5 py-4 font-bold text-green-700">
                                {{ $feeding->weight }} Kg
                            </td>

                            <td class="px-5 py-4 text-gray-500">
                                {{ $feeding->notes ?? '-' }}
                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="4" class="text-center py-10 text-gray-400">
                                Belum ada data pakan
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div id="feedingModal"
    class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

    <div class="bg-white rounded-3xl p-6 w-[450px]">

        <h2 class="text-xl font-black text-[#12557B] mb-5">
            Tambah Pakan
        </h2>

        <form action="{{ route('feeding.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">
                    Jenis Pakan
                </label>

                <input
                    type="text"
                    name="feed_type"
                    class="w-full border rounded-xl p-3"
                    placeholder="Ampas Tahu">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">
                    Berat (Kg)
                </label>

                <input
                    type="number"
                    step="0.1"
                    name="weight"
                    class="w-full border rounded-xl p-3"
                    placeholder="2">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">
                    Catatan
                </label>

                <textarea
                    name="notes"
                    class="w-full border rounded-xl p-3"
                    rows="3"></textarea>
            </div>

            <div class="flex justify-end gap-3">

                <button
                    type="button"
                    onclick="closeFeedingModal()"
                    class="px-4 py-2 rounded-xl bg-gray-200">
                    Batal
                </button>

                <button
                    type="submit"
                    class="px-4 py-2 rounded-xl bg-[#12557B] text-white">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

<script>
    function openFeedingModal() {
        const modal = document.getElementById('feedingModal');

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeFeedingModal() {
        const modal = document.getElementById('feedingModal');

        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
</script>   

@endsection