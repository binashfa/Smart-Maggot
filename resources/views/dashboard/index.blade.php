@extends('layouts.app')

@section('content')

<div class="flex gap-6">

    <!-- MAIN CONTENT -->
    <div class="flex-1">

        <!-- TOPBAR -->
        <div class="flex items-center justify-between mb-8">

            <div>
                <h1 class="text-3xl font-bold text-[#2E2E2E]">
                    Hello, Operator 👋
                </h1>

                <p class="text-gray-400 mt-1">
                    Welcome back to Smart Maggot Monitoring
                </p>
            </div>

            <div class="flex items-center gap-4">

                <!-- NOTIFICATION -->
                <div class="bg-white w-12 h-12 rounded-2xl flex items-center justify-center shadow relative">

                    <i class="fi fi-rr-bell text-[#2E2E2E]"></i>

                    <div class="absolute top-2 right-2 w-2 h-2 bg-orange-400 rounded-full"></div>

                </div>

            </div>

        </div>

        <!-- SEARCH -->
        <div class="flex gap-4 mb-8">

            <div class="flex-1 bg-white px-5 py-4 rounded-2xl shadow flex items-center gap-3">

                <i class="fi fi-rr-search text-gray-400"></i>

                <input type="text"
                       placeholder="Search monitoring..."
                       class="w-full outline-none">

            </div>

            <button class="bg-[#2FCB73] text-white px-8 rounded-2xl shadow flex items-center gap-2">

                <i class="fi fi-rr-search"></i>

                Search

            </button>

        </div>

        <!-- TITLE -->
        <div class="flex items-center justify-between mb-6">

            <h1 class="text-3xl font-bold text-[#2E2E2E]">
                Monitoring Sensor
            </h1>

            <a href="#" class="text-[#2FCB73] font-semibold flex items-center gap-2">

                View all

                <i class="fi fi-rr-arrow-small-right"></i>

            </a>

        </div>

        <!-- CARDS -->
        <div class="grid grid-cols-3 gap-5 mb-10">

            <!-- TEMP -->
            <div class="bg-white rounded-[30px] overflow-hidden shadow">

                <div class="h-44 bg-gradient-to-b from-red-200 to-red-100 relative">

                    <div class="absolute top-5 right-5 bg-white/30 backdrop-blur w-14 h-14 rounded-2xl flex items-center justify-center">

                        <i class="fi fi-rr-temperature-high text-white text-2xl"></i>

                    </div>

                </div>

                <div class="p-5">

                    <div class="bg-white rounded-2xl shadow p-4 -mt-14 relative">

                        <h1 class="font-bold text-xl text-[#2E2E2E]">
                            Temperature
                        </h1>

                        <p class="text-gray-400 text-sm">
                            Smart Maggot Area
                        </p>

                        <div class="mt-3 flex items-center justify-between">

                            <h1 class="text-[#2FCB73] font-bold text-2xl">
                                31°C
                            </h1>

                            <div class="bg-[#2FCB73] text-white w-10 h-10 rounded-full flex items-center justify-center">

                                <i class="fi fi-rr-temperature-high"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- HUMIDITY -->
            <div class="bg-white rounded-[30px] overflow-hidden shadow">

                <div class="h-44 bg-gradient-to-b from-blue-200 to-blue-100 relative">

                    <div class="absolute top-5 right-5 bg-white/30 backdrop-blur w-14 h-14 rounded-2xl flex items-center justify-center">

                        <i class="fi fi-rr-humidity text-white text-2xl"></i>

                    </div>

                </div>

                <div class="p-5">

                    <div class="bg-white rounded-2xl shadow p-4 -mt-14 relative">

                        <h1 class="font-bold text-xl text-[#2E2E2E]">
                            Humidity
                        </h1>

                        <p class="text-gray-400 text-sm">
                            Smart Maggot Area
                        </p>

                        <div class="mt-3 flex items-center justify-between">

                            <h1 class="text-[#2FCB73] font-bold text-2xl">
                                72%
                            </h1>

                            <div class="bg-[#2FCB73] text-white w-10 h-10 rounded-full flex items-center justify-center">

                                <i class="fi fi-rr-humidity"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- STATUS -->
            <div class="bg-white rounded-[30px] overflow-hidden shadow">

                <div class="h-44 bg-gradient-to-b from-green-200 to-green-100 relative">

                    <div class="absolute top-5 right-5 bg-white/30 backdrop-blur w-14 h-14 rounded-2xl flex items-center justify-center">

                        <i class="fi fi-rr-shield-check text-white text-2xl"></i>

                    </div>

                </div>

                <div class="p-5">

                    <div class="bg-white rounded-2xl shadow p-4 -mt-14 relative">

                        <h1 class="font-bold text-xl text-[#2E2E2E]">
                            Status
                        </h1>

                        <p class="text-gray-400 text-sm">
                            Environment Condition
                        </p>

                        <div class="mt-3 flex items-center justify-between">

                            <h1 class="text-[#2FCB73] font-bold text-2xl">
                                Normal
                            </h1>

                            <div class="bg-[#2FCB73] text-white w-10 h-10 rounded-full flex items-center justify-center">

                                <i class="fi fi-rr-check"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- TABLE -->
        <div>

            <div class="flex items-center justify-between mb-6">

                <h1 class="text-3xl font-bold text-[#2E2E2E]">
                    Latest Sensor Data
                </h1>

                <a href="#" class="text-[#2FCB73] font-semibold flex items-center gap-2">

                    View all

                    <i class="fi fi-rr-arrow-small-right"></i>

                </a>

            </div>

            <!-- DATA ITEMS -->
            <div class="space-y-4">

                <!-- ITEM -->
                <div class="bg-white rounded-3xl p-5 flex items-center justify-between shadow">

                    <div class="flex items-center gap-5">

                        <div class="w-24 h-20 rounded-2xl bg-green-100 flex items-center justify-center">

                            <i class="fi fi-rr-microchip text-3xl text-green-500"></i>

                        </div>

                        <div>

                            <h1 class="font-bold text-xl text-[#2E2E2E]">
                                Device ESP32-01
                            </h1>

                            <p class="text-gray-400">
                                Temperature: 31°C
                            </p>

                        </div>

                    </div>

                    <div class="text-right">

                        <h1 class="text-[#2FCB73] font-bold text-xl">
                            Normal
                        </h1>

                        <p class="text-gray-400 text-sm">
                            10:45 WIB
                        </p>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="bg-white rounded-3xl p-5 flex items-center justify-between shadow">

                    <div class="flex items-center gap-5">

                        <div class="w-24 h-20 rounded-2xl bg-blue-100 flex items-center justify-center">

                            <i class="fi fi-rr-microchip text-3xl text-blue-500"></i>

                        </div>

                        <div>

                            <h1 class="font-bold text-xl text-[#2E2E2E]">
                                Device ESP32-02
                            </h1>

                            <p class="text-gray-400">
                                Humidity: 72%
                            </p>

                        </div>

                    </div>

                    <div class="text-right">

                        <h1 class="text-[#2FCB73] font-bold text-xl">
                            Stable
                        </h1>

                        <p class="text-gray-400 text-sm">
                            10:50 WIB
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT PANEL -->
    <div class="w-[320px]">

        <div class="bg-gradient-to-b from-[#B8F1FF] to-[#8EEB9D] rounded-[40px] p-6 min-h-screen relative overflow-hidden">

            <!-- PROFILE -->
            <h1 class="text-3xl font-bold text-white mb-10">
                My Profile
            </h1>

            <div class="flex flex-col items-center">

                <div class="w-36 h-36 rounded-full bg-white border-4 border-dashed border-white mb-6 flex items-center justify-center">

                    <i class="fi fi-rr-user text-5xl text-[#2FCB73]"></i>

                </div>

                <h1 class="text-3xl font-bold text-white">
                    Operator
                </h1>

                <p class="text-white/70 mt-2">
                    Smart Monitoring User
                </p>

            </div>

            <!-- DEVICE STATUS -->
            <div class="mt-12">

                <h1 class="text-2xl font-bold text-white mb-6">
                    Device Status
                </h1>

                <div class="space-y-5">

                    <!-- CARD -->
                    <div class="bg-white rounded-3xl p-4 flex items-center gap-4">

                        <div class="w-24 h-20 rounded-2xl bg-green-100 flex items-center justify-center">

                            <i class="fi fi-rr-wifi text-3xl text-green-500"></i>

                        </div>

                        <div>

                            <h1 class="font-bold text-[#2E2E2E]">
                                ESP32-01
                            </h1>

                            <p class="text-gray-400 text-sm">
                                Online
                            </p>

                            <h1 class="text-[#2FCB73] font-bold mt-2">
                                Active
                            </h1>

                        </div>

                    </div>

                    <!-- CARD -->
                    <div class="bg-white rounded-3xl p-4 flex items-center gap-4">

                        <div class="w-24 h-20 rounded-2xl bg-red-100 flex items-center justify-center">

                            <i class="fi fi-rr-wifi-slash text-3xl text-red-500"></i>

                        </div>

                        <div>

                            <h1 class="font-bold text-[#2E2E2E]">
                                ESP32-02
                            </h1>

                            <p class="text-gray-400 text-sm">
                                Offline
                            </p>

                            <h1 class="text-red-500 font-bold mt-2">
                                Inactive
                            </h1>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection