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

<body class="overflow-hidden bg-[#F2F3EE]">

    <!-- WRAPPER -->
    <div class="flex h-screen p-4 gap-4">

        <!-- SIDEBAR -->
        <aside id="sidebar" class="w-[260px] h-full rounded-[36px] bg-[#10828D] shadow-2xl p-4 flex flex-col justify-between transition-all duration-300 ease-in-out">

            <!-- TOP -->
            <div>

                <!-- HEADER -->
                <div class="flex items-center justify-between mb-10">

                    <!-- LOGO -->
                    <div class="flex items-center" id="logoWrapper">

                        <!-- TEXT -->
                        <div id="logoText" class="mx-2">

                            <h1 class="text-[22px] font-black text-white">
                                SmartMaggot
                            </h1>

                            <p class="text-[16px] text-white">
                                IoT Monitoring
                            </p>

                        </div>

                    </div>


                    <!-- TOGGLE -->
                    <div class="flex justify-center w-full">
                        <button id="toggleBtn" class="w-14 h-14 rounded-[22px] bg-white/70 flex items-center justify-center shadow-md hover:scale-105 transition">
                            <i class="fi fi-rr-menu-burger twhite text-lg"></i>
                        </button>
                    </div>

                </div>

                <!-- MENU -->
                <div class="space-y-3">

                    <!-- DASHBOARD -->
                    <a href="/dashboard" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl transition {{ request()->is('dashboard') ? 'bg-[#12557B] text-white shadow-lg font-bold' : 'text-white hover:bg-[#12557B]/30' }}">
                        <i class="fi fi-rr-home text-lg"></i>
                        <span class="text-sm menu-label">Dashboard</span>
                    </a>

                    <!-- MONITORING -->
                    <a href="/monitoring" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl transition {{ request()->is('monitoring') ? 'bg-[#12557B] text-white shadow-lg font-bold' : 'text-white hover:bg-[#12557B]/30' }}">
                        <i class="fi fi-rr-sensor text-lg"></i>
                        <span class="text-sm menu-label">Monitoring</span>
                    </a>

                    <!-- DEVICES -->
                    <a href="{{ route('devices.index') }}" class="flex items-center gap-4 h-[56px] px-5 rounded-2xl transition {{ request()->is('devices*') ? 'bg-[#12557B] text-white shadow-lg font-bold' : 'text-white hover:bg-[#12557B]/30' }}">
                        <i class="fi fi-rr-microchip text-lg"></i>
                        <span class="text-sm menu-label">Devices</span>
                    </a>

                </div>

            </div>

            <!-- LOGOUT -->
            <form action="/logout" method="POST">

                @csrf

                <button class="w-full rounded-[24px] bg-[#12557B] hover:scale-[1.02] transition p-4 flex items-center gap-3 text-white shadow-xl">

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


            <!-- PAGE CONTENT -->
            @yield('content')

        </main>


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