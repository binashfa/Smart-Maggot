<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SmartMaggot Dashboard</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

</head>

<body class="overflow-hidden bg-[#AEB8A0]">

    <!-- WRAPPER -->
    <div class="flex h-screen p-4 gap-4">

        <!-- SIDEBAR -->
        <aside id="sidebar" class="w-[260px] h-full rounded-[36px] bg-[#E9F056] shadow-2xl p-4 flex flex-col justify-between transition-all duration-300 ease-in-out">

            <!-- TOP -->
            <div>

                <!-- HEADER -->
                <div class="flex items-center justify-between mb-10">

                    <!-- LOGO -->
                    <div class="flex items-center gap-3" id="logoWrapper">

                        <!-- ICON -->
                        <div class="w-14 h-14 rounded-2xl bg-white/70 flex items-center justify-center shadow-md">
                            <img src="{{ asset('images/maskot.png') }}" class="w-10 h-10 object-contain">
                        </div>

                        <!-- TEXT -->
                        <div id="logoText">

                            <h1 class="text-[12px] font-black text-[#2E2E2E]">
                                SmartMaggot
                            </h1>

                            <p class="text-[9px] text-[#4C4C4C] mt-1">
                                IoT Monitoring
                            </p>

                        </div>

                    </div>


                    <!-- TOGGLE -->
                    <div class="flex justify-center w-full">
                        <button id="toggleBtn" class="w-14 h-14 rounded-[22px] bg-white/70 flex items-center justify-center shadow-md hover:scale-105 transition">
                            <i class="fi fi-rr-menu-burger text-[#2E2E2E] text-lg"></i>
                        </button>
                    </div>

                </div>

                <!-- MENU -->
                <div class="space-y-3">

                    <!-- DASHBOARD -->
                    <a href="/dashboard" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl bg-[#2E2E2E] text-white shadow-lg">
                        <i class="fi fi-rr-home text-lg"></i>
                        <span class="font-semibold text-sm menu-label">Dashboard</span>
                    </a>

                    <!-- MONITORING -->
                    <a href="/monitoring" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl hover:bg-white/40 transition text-[#2E2E2E]">
                        <i class="fi fi-rr-sensor text-lg"></i>
                        <span class="font-semibold text-sm menu-label">Monitoring</span>
                    </a>

                    <!-- DEVICES -->
                    <a href="/devices" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl hover:bg-white/40 transition text-[#2E2E2E]">
                        <i class="fi fi-rr-microchip text-lg"></i>
                        <span class="font-semibold text-sm menu-label">Devices</span>
                    </a>

                    <!-- USERS -->
                    <a href="/users" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl hover:bg-white/40 transition text-[#2E2E2E]">
                        <i class="fi fi-rr-users text-lg"></i>
                        <span class="font-semibold text-sm menu-label">Users</span>
                    </a>

                </div>

            </div>

            <!-- LOGOUT -->
            <form action="/logout" method="POST">

                @csrf

                <button class="w-full rounded-[24px] bg-[#351E28] hover:scale-[1.02] transition p-4 flex items-center gap-3 text-white shadow-xl">

                    <!-- ICON -->
                    <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
                        <i class="fi fi-rr-exit"></i>
                    </div>

                    <!-- TEXT -->
                    <div class="text-left menu-label">

                        <h2 class="font-bold text-sm">
                            Logout
                        </h2>

                        <p class="text-xs text-white/70">
                            Exit Dashboard
                        </p>

                    </div>

                </button>

            </form>

        </aside>

        <!-- MAIN -->
        <main class="flex-1 overflow-y-auto">

            <!-- TOPBAR -->
            <div class="rounded-[36px] bg-[#EBE7DA] p-5 shadow-xl flex items-center justify-between mb-4">

                <!-- LEFT -->
                <div>

                    <h1 class="text-4xl font-black text-[#2E2E2E]">
                        Hello, Admin
                    </h1>

                    <p class="text-sm text-[#5B5B5B] mt-2">
                        Welcome back to SmartMaggot Dashboard
                    </p>

                </div>

                <!-- SEARCH -->
                <div class="bg-white px-5 py-3 rounded-2xl shadow-md flex items-center gap-3 text-[#777]">
                    <i class="fi fi-rr-search"></i>
                    <span class="text-sm">Search...</span>
                </div>

            </div>

            <!-- CONTENT -->
            @yield('content')

        </main>

        <!-- RIGHT PANEL -->
        <aside class="w-[300px] h-full rounded-[36px] bg-[#EBE7DA] p-4 shadow-2xl overflow-y-auto">

            <!-- PROFILE -->
            <div class="text-center pt-3">

                <!-- AVATAR -->
                <div class="w-28 h-28 rounded-full bg-[#E9F056] mx-auto flex items-center justify-center shadow-lg overflow-hidden">
                    <img src="{{ asset('images/maskot.png') }}" class="w-16 h-16 object-contain">
                </div>

                <!-- NAME -->
                <h1 class="text-[18px] font-black mt-4 text-[#2E2E2E]">
                    Superadmin
                </h1>

                <!-- SUBTITLE -->
                <p class="text-[12px] text-[#666] mt-1">
                    Smart Farming System
                </p>

            </div>

            <!-- SENSOR -->
            <div class="space-y-5 mt-7">

                <!-- TEMPERATURE -->
                <div class="rounded-[28px] bg-[#FF5C34] p-5 shadow-xl text-white">

                    <!-- HEADER -->
                    <div class="flex items-center justify-between">

                        <!-- LEFT -->
                        <div class="flex items-center gap-3">

                            <!-- ICON -->
                            <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center">
                                <i class="fi fi-rr-temperature-high text-xl"></i>
                            </div>

                            <!-- TEXT -->
                            <div>

                                <h2 class="font-black text-sm">
                                    Temperature
                                </h2>

                                <p class="text-[11px] text-white/70">
                                    Smart Sensor
                                </p>

                            </div>

                        </div>

                        <!-- STATUS -->
                        <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-bold">
                            NORMAL
                        </span>

                    </div>

                    <!-- VALUE -->
                    <h1 class="text-5xl font-black mt-6">
                        {{ $latest->suhu ?? 0 }}°
                    </h1>

                    <!-- BAR -->
                    <div class="w-full h-2 bg-white/20 rounded-full mt-5">
                        <div class="h-2 rounded-full bg-white" style="width: {{ $latest->suhu ?? 0 }}%"></div>
                    </div>

                </div>

                <!-- HUMIDITY -->
                <div class="rounded-[28px] bg-[#D7EFFF] p-5 shadow-xl">

                    <!-- HEADER -->
                    <div class="flex items-center justify-between">

                        <!-- LEFT -->
                        <div class="flex items-center gap-3">

                            <!-- ICON -->
                            <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center shadow-md">
                                <i class="fi fi-rr-raindrops text-[#4A7EBB] text-xl"></i>
                            </div>

                            <!-- TEXT -->
                            <div>

                                <h2 class="font-black text-sm text-[#2E2E2E]">
                                    Humidity
                                </h2>

                                <p class="text-[11px] text-[#555]">
                                    Water Sensor
                                </p>

                            </div>

                        </div>

                        <!-- STATUS -->
                        <span class="px-3 py-1 rounded-full bg-[#4A7EBB] text-white text-[10px] font-bold">
                            GOOD
                        </span>

                    </div>

                    <!-- VALUE -->
                    <h1 class="text-5xl font-black mt-6 text-[#2E2E2E]">
                        {{ $latest->kelembapan ?? 0 }}%
                    </h1>

                    <!-- BAR -->
                    <div class="w-full h-2 bg-white rounded-full mt-5">
                        <div class="h-2 rounded-full bg-[#4A7EBB]" style="width: {{ $latest->kelembapan ?? 0 }}%"></div>
                    </div>

                </div>

            </div>

        </aside>

    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const logoWrapper = document.getElementById('logoWrapper');
        const menuLabels = document.querySelectorAll('.menu-label');

        let isOpen = true;

        toggleBtn.addEventListener('click', () => {

            if (isOpen) {

                // CLOSE
                sidebar.classList.remove('w-[260px]');
                sidebar.classList.add('w-[110px]');

                // HIDE LOGO
                logoWrapper.classList.add('hidden');

                // HIDE MENU TEXT
                menuLabels.forEach(label => {
                    label.classList.add('hidden');
                });

                // CENTER MENU
                document.querySelectorAll('#sidebar a').forEach(menu => {
                    menu.classList.remove('px-5');
                    menu.classList.add('justify-center');
                });

            } else {

                // OPEN
                sidebar.classList.remove('w-[110px]');
                sidebar.classList.add('w-[260px]');

                // SHOW LOGO
                logoWrapper.classList.remove('hidden');

                // SHOW MENU TEXT
                menuLabels.forEach(label => {
                    label.classList.remove('hidden');
                });

                // NORMAL MENU
                document.querySelectorAll('#sidebar a').forEach(menu => {
                    menu.classList.add('px-5');
                    menu.classList.remove('justify-center');
                });

            }

            isOpen = !isOpen;

        });
    </script>

</body>

</html>