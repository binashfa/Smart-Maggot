<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SmartMaggot</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .logo-float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp .8s ease;
        }
    </style>
</head>

<body class="min-h-screen relative overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/bg-maggot.jpg') }}"
            alt="Background"
            class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/5"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute top-20 left-32 w-4 h-4 rounded-full bg-white/40 animate-pulse"></div>
    <div class="absolute top-40 right-40 w-3 h-3 rounded-full bg-white/50 animate-ping"></div>
    <div class="absolute bottom-32 right-20 w-5 h-5 rounded-full bg-white/30 animate-pulse"></div>


    <!-- Main -->
    <div class="relative z-30 min-h-screen flex items-center justify-center p-6">

        <div class="w-full max-w-sm">

            <!-- Logo -->
            <div class="text-center">

                <img
                    src="{{ asset('images/logo-smartmaggot.png') }}"
                    alt="SmartMaggot"
                    class="w-36 md:w-48 lg:w-56 mx-auto logo-float drop-shadow-xl">

            </div>


            <!-- Login Card -->
            <div class="bg-white/75 backdrop-blur-xl border border-white/60 rounded-[40px] shadow-[0_20px_60px_rgba(0,0,0,0.15)] p-8 md:p-10 fade-up">

                <h2 class="text-[20px] font-black text-center text-[#12557B]">
                    Welcome Back 👋
                </h2>

                <p class="text-center text-gray-500 text-[10px] mb-2">
                    Login untuk mengakses dashboard SmartMaggot
                </p>

                @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-600 rounded-2xl p-4">
                    {{ $errors->first() }}
                </div>
                @endif

                <form action="{{ route('login') }}" method="POST">

                    @csrf

                    <div class="mt-4 mb-2">

                        <input
                            type="email"
                            name="email"
                            placeholder="Masukkan Email"
                            class="w-full bg-white/80 border border-white rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#10828D]"
                            required>

                    </div>

                    <div class="mb-2">

                        <input
                            type="password"
                            name="password"
                            placeholder="Masukkan Password"
                            class="w-full bg-white/80 border border-white rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#10828D]"
                            required>

                    </div>

                    <button
                        type="submit"
                        class="w-full bg-[#12557B] hover:bg-[#10828D] text-white font-bold py-4 rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-xl mt-4">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>