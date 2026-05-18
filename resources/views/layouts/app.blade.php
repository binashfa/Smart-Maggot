<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Maggot Dashboard</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FLATICON ICON -->
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body class="bg-[#F4F7FB] overflow-hidden">

<div class="flex h-screen p-5 gap-5">

    <!-- SIDEBAR -->
    <aside class="w-[260px] bg-white rounded-[35px] px-6 py-8 flex flex-col justify-between shadow-sm">

        <div>

            <!-- LOGO -->
            <div class="flex items-center gap-3 mb-14">

                <div class="w-10 h-10 rounded-2xl bg-[#2FCB73] flex items-center justify-center">

                    <i class="fi fi-rr-leaf text-white text-lg"></i>

                </div>

                <h1 class="text-2xl font-bold text-[#2E2E2E]">
                    SmartMaggot
                </h1>

            </div>

            <!-- MENU -->
            <nav class="space-y-3">

                <!-- ACTIVE -->
                <a href="#"
                   class="flex items-center gap-4 bg-[#2FCB73] text-white px-5 py-4 rounded-2xl font-medium shadow">

                    <i class="fi fi-rr-apps text-lg"></i>

                    <span>Dashboard</span>

                </a>

                <!-- ITEM -->
                <a href="#"
                   class="flex items-center gap-4 text-[#8A8A8A] hover:bg-[#F5F7FB] px-5 py-4 rounded-2xl transition">

                    <i class="fi fi-rr-radar-monitoring-tracking text-lg"></i>

                    <span>Monitoring</span>

                </a>

                <!-- ITEM -->
                <a href="#"
                   class="flex items-center gap-4 text-[#8A8A8A] hover:bg-[#F5F7FB] px-5 py-4 rounded-2xl transition">

                    <i class="fi fi-rr-chart-line-up text-lg"></i>

                    <span>Sensor Data</span>

                </a>

                <!-- ITEM -->
                <a href="#"
                   class="flex items-center gap-4 text-[#8A8A8A] hover:bg-[#F5F7FB] px-5 py-4 rounded-2xl transition">

                    <i class="fi fi-rr-bell text-lg"></i>

                    <span>Notifications</span>

                    <div class="ml-auto bg-orange-400 text-white text-xs px-2 py-1 rounded-full">
                        3
                    </div>

                </a>

                <!-- ITEM -->
                <a href="#"
                   class="flex items-center gap-4 text-[#8A8A8A] hover:bg-[#F5F7FB] px-5 py-4 rounded-2xl transition">

                    <i class="fi fi-rr-settings text-lg"></i>

                    <span>Settings</span>

                </a>

            </nav>

        </div>

        <!-- BOTTOM -->
        <div>

            <!-- ALERT CARD -->
            <div class="bg-gradient-to-b from-[#C8F4FF] to-[#EAFBFF] rounded-[30px] p-5 mb-6 relative overflow-hidden">

                <h1 class="text-xl font-bold text-[#2E2E2E] mb-2">
                    Smart Alert
                </h1>

                <p class="text-sm text-gray-500 leading-relaxed">
                    Monitor your maggot farming environment safely and efficiently.
                </p>

                <button class="mt-5 w-12 h-12 bg-[#2FCB73] rounded-full text-white text-xl shadow flex items-center justify-center">

                    <i class="fi fi-rr-arrow-right"></i>

                </button>

            </div>

            <!-- LOGOUT -->
            <a href="#"
               class="flex items-center gap-4 text-[#8A8A8A] hover:bg-[#F5F7FB] px-5 py-4 rounded-2xl transition">

                <i class="fi fi-rr-sign-out-alt text-lg"></i>

                <span>Logout</span>

            </a>

        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 overflow-y-auto">

        @yield('content')

    </main>

</div>

</body>
</html>