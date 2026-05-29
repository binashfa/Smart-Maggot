
@extends('layouts.superadmin')

@section('content')

<div class="space-y-6">

    <!-- TOP CARD -->
    <div class="grid grid-cols-3 gap-6">

        <!-- DEVICE -->
        <div class="rounded-[32px] bg-[#E9F056] p-6 shadow-2xl relative overflow-hidden">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-[#2E2E2E]/70 text-sm font-semibold">Total Device</p>
                    <h1 class="text-4xl font-black mt-4 text-[#2E2E2E]">24</h1>
                </div>

                <div class="w-20 h-20 rounded-full bg-white/60 flex items-center justify-center shadow-lg">
                    <i class="fi fi-rr-microchip text-[34px] text-[#2E2E2E]"></i>
                </div>

            </div>

            <div class="mt-10">
                <div class="w-full h-2 bg-white/40 rounded-full">
                    <div class="w-[75%] h-2 rounded-full bg-[#2E2E2E]"></div>
                </div>
            </div>

        </div>

        <!-- USERS -->
        <div class="rounded-[32px] bg-[#D7EFFF] p-6 shadow-2xl relative overflow-hidden">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-[#2E2E2E]/70 text-sm font-semibold">Total Users</p>
                    <h1 class="text-4xl font-black mt-4 text-[#35516E]">120</h1>
                </div>

                <div class="w-20 h-20 rounded-full bg-white/60 flex items-center justify-center shadow-lg">
                    <i class="fi fi-rr-users text-[34px] text-[#35516E]"></i>
                </div>

            </div>

            <div class="mt-10">
                <div class="w-full h-2 bg-white/60 rounded-full">
                    <div class="w-[60%] h-2 rounded-full bg-[#35516E]"></div>
                </div>
            </div>

        </div>

        <!-- PRODUCTION -->
        <div class="rounded-[32px] bg-[#FF5C34] p-6 shadow-2xl relative overflow-hidden text-white">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-white/70 text-sm font-semibold">Production</p>
                    <h1 class="text-4xl font-black mt-4">540kg</h1>
                </div>

                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center shadow-lg">
                    <i class="fi fi-rr-box text-[34px] text-white"></i>
                </div>

            </div>

            <div class="mt-10">
                <div class="w-full h-2 bg-white/20 rounded-full">
                    <div class="w-[85%] h-2 rounded-full bg-white"></div>
                </div>
            </div>

        </div>

    </div>

    <!-- BIG CARD -->
    <div class="rounded-[28px] bg-[#351E28] p-5 shadow-2xl overflow-hidden">

        <!-- HEADER -->
        <div class="flex items-center justify-between mb-6">

            <div class="flex items-center gap-3">

                <div class="w-12 h-12 rounded-[18px] bg-[#FF5C34] flex items-center justify-center shadow-lg">
                    <i class="fi fi-rr-sensor text-white text-lg"></i>
                </div>

                <div>
                    <h1 class="text-lg font-black text-white leading-none">
                        Realtime Monitoring
                    </h1>

                    <p class="text-white/60 mt-1 text-[9px]">
                        Monitoring suhu dan kelembapan realtime
                    </p>
                </div>

            </div>

            <button class="px-4 py-2 rounded-[14px] bg-[#E9F056] text-[#2E2E2E] text-[10px] font-black hover:scale-105 transition shadow-lg">
                Detail
            </button>

        </div>

        <!-- CHART -->
        <div class="h-[220px] rounded-[24px] bg-[#EBE7DA] p-5 flex items-end gap-3 overflow-hidden">

            <div class="w-10 h-[35%] rounded-t-[18px] bg-[#E9F056] shadow-md animate-pulse"></div>

            <div class="w-10 h-[60%] rounded-t-[18px] bg-[#FF5C34] shadow-md animate-pulse"></div>

            <div class="w-10 h-[45%] rounded-t-[18px] bg-[#D7EFFF] shadow-md animate-pulse"></div>

            <div class="w-10 h-[80%] rounded-t-[18px] bg-[#351E28] shadow-md animate-pulse"></div>

            <div class="w-10 h-[65%] rounded-t-[18px] bg-[#FF5C34] shadow-md animate-pulse"></div>

            <div class="w-10 h-[50%] rounded-t-[18px] bg-[#D7EFFF] shadow-md animate-pulse"></div>

            <div class="w-10 h-[90%] rounded-t-[18px] bg-[#E9F056] shadow-md animate-pulse"></div>

        </div>

    </div>

</div>

@endsection
```
