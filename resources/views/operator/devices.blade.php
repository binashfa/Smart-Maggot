@extends('layouts.operator')

@section('content')
@php
$ledDisabled = $currentMode == 'AUTO';
@endphp

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
<style>
    * {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
</style>

<div class="mt-6 mx-auto">
    <div class="bg-white rounded-[24px] border border-gray-100 p-8 shadow-sm">

        {{-- Header --}}
        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center">
                <i class="fi fi-rr-microchip text-blue-700 text-lg"></i>
            </div>
            <div>
                <p class="text-base font-bold text-gray-900 leading-none">Control Device</p>
                <p class="text-xs text-gray-400 mt-0.5">Kontrol perangkat ESP32</p>
            </div>
            <div class="ml-auto flex items-center gap-1.5 bg-green-50 rounded-full px-3 py-1">
                <div class="w-1.5 h-1.5 rounded-full bg-green-700"></div>
                <span class="text-xs font-600 text-green-800">Online</span>
            </div>
        </div>

        {{-- Mode --}}
        <div class="mb-5">
            <p class="text-[11px] font-semibold tracking-widest text-gray-400 uppercase mb-2">Mode</p>
            <div class="grid grid-cols-2 gap-2">
                <form action="{{ route('device-control.fan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="command" value="auto_mode">
                    <button type="submit" class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-sm font-bold transition-all
          {{ $currentMode == 'AUTO' ? 'bg-blue-700 text-blue-50 ring-2 ring-blue-200' : 'bg-gray-100 text-gray-500 hover:bg-gray-200' }}">
                        <i class="fi fi-rr-settings"></i>
                        <span>Auto</span>
                        @if($currentMode == 'AUTO')
                        <span class="text-[10px] bg-blue-900 text-blue-200 px-2 py-0.5 rounded-full">aktif</span>
                        @endif
                    </button>
                </form>
                <form action="{{ route('device-control.fan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="command" value="manual_mode">
                    <button type="submit" class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-sm font-bold transition-all
          {{ $currentMode == 'MANUAL' ? 'bg-gray-900 text-gray-100 ring-2 ring-gray-300' : 'bg-gray-100 text-gray-500 hover:bg-gray-200' }}">
                        <i class="fi fi-rr-hand"></i>
                        <span>Manual</span>
                        @if($currentMode == 'MANUAL')
                        <span class="text-[10px] bg-gray-700 text-gray-200 px-2 py-0.5 rounded-full">aktif</span>
                        @endif
                    </button>
                </form>
            </div>
        </div>

        {{-- Threshold Info --}}

        <div class="flex flex-wrap gap-2">

            <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-red-50 border border-red-100">
                <i class="fi fi-rr-temperature-high text-red-500 text-xs"></i>
                <span class="text-xs font-semibold text-red-700">
                    Fan ON > 32°C
                </span>
            </div>

            <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-green-50 border border-green-100">
                <i class="fi fi-rr-temperature-low text-green-500 text-xs"></i>
                <span class="text-xs font-semibold text-green-700">
                    Fan OFF < 29°C
                        </span>
            </div>

            <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-blue-50 border border-blue-100">
                <i class="fi fi-rr-settings text-blue-500 text-xs"></i>
                <span class="text-xs font-medium text-blue-700">
                    Auto Control DHT22
                </span>
            </div>

            @if($ledDisabled)
            <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-amber-50 border border-amber-200">
                <i class="fi fi-rr-triangle-warning text-amber-600 text-xs"></i>
                <span class="text-xs font-medium text-amber-700">
                    Mode Auto Aktif
                </span>
            </div>
            @endif

        </div>


        {{-- Controls --}}
        <div class="flex flex-col gap-3">

            @php
            $controls = [
            [
            'label' => 'Fan',
            'icon' => 'fi fi-rr-fan',
            'on_cmd' => 'fan_on',
            'off_cmd' => 'fan_off',
            'state' => $stateFan,
            'on_color' => 'bg-green-50 text-green-900',
            'off_color'=> 'bg-red-50 text-red-900',
            ],

            [
            'label' => 'LED Hijau',
            'icon' => 'fi fi-rr-bulb',
            'on_cmd' => 'led_green_on',
            'off_cmd' => 'led_green_off',
            'state' => $stateLedGreen,
            'on_color' => 'bg-green-50 text-green-900',
            'off_color'=> 'bg-gray-100 text-gray-500',
            ],

            [
            'label' => 'LED Merah',
            'icon' => 'fi fi-rr-bulb',
            'on_cmd' => 'led_red_on',
            'off_cmd' => 'led_red_off',
            'state' => $stateLedRed,
            'on_color' => 'bg-red-50 text-red-900',
            'off_color'=> 'bg-gray-100 text-gray-500',
            ],

            [
            'label' => 'Buzzer',
            'icon' => 'fi fi-rr-volume',
            'on_cmd' => 'buzzer_unmute',
            'off_cmd' => 'buzzer_mute',
            'state' => $stateBuzzer,
            'on_color' => 'bg-amber-50 text-amber-900',
            'off_color'=> 'bg-gray-100 text-gray-500',
            ],
            ];
            @endphp


            @foreach($controls as $ctrl)

            @php
            $disableThisControl =
            $currentMode == 'AUTO' &&
            (
            $ctrl['label'] == 'LED Hijau' ||
            $ctrl['label'] == 'LED Merah'
            );
            @endphp

            <div class="bg-gray-50 rounded-2xl p-2.5">
                <div class="flex items-center justify-between mb-2.5">
                    <p class="flex items-center gap-2 text-[11px] font-semibold tracking-widest text-gray-400 uppercase">
                        <i class="{{ $ctrl['icon'] }}"></i>
                        {{ $ctrl['label'] }}
                    </p>
                    {{-- Badge state --}}
                    <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full
      {{ $ctrl['state'] == 'on'
          ? 'bg-green-100 text-green-800'
          : 'bg-gray-200 text-gray-500' }}">
                        {{ strtoupper($ctrl['state']) }}
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <form action="{{ route('device-control.fan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="command" value="{{ $ctrl['on_cmd'] }}">
                        <button type="submit" {{ $disableThisControl ? 'disabled' : '' }}
                            class="w-full py-2.5 rounded-xl text-sm font-bold transition-all relative
        {{ $disableThisControl
    ? 'bg-gray-200 text-gray-400 cursor-not-allowed'
    : $ctrl['on_color'] . ' hover:brightness-95 active:scale-95'
}}
        {{ !$disableThisControl && $ctrl['state'] == 'on'
    ? 'ring-2 ring-green-400'
    : '' }}">
                            On
                            @if($ctrl['state'] == 'on' && !$disableThisControl)
                            <span class="absolute top-1.5 right-2 w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            @endif
                        </button>
                    </form>

                    <form action="{{ route('device-control.fan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="command" value="{{ $ctrl['off_cmd'] }}">
                        <button type="submit" {{ $disableThisControl ? 'disabled' : '' }}
                            class="w-full py-2.5 rounded-xl text-sm font-bold transition-all relative
        {{ $disableThisControl
    ? 'bg-gray-200 text-gray-400 cursor-not-allowed'
    : $ctrl['off_color'] . ' hover:brightness-95 active:scale-95'
}}
        {{ !$disableThisControl && $ctrl['state'] == 'off'
    ? 'ring-2 ring-gray-400'
    : '' }}">
                            Off
                            @if($ctrl['state'] == 'off' && !$disableThisControl)
                            <span class="absolute top-1.5 right-2 w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                            @endif
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endsection