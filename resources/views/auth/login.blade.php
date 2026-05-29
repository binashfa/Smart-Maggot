<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SmartMaggot</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body class="bg-[#f5f5f7] min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-8">

            <div class="w-20 h-20 bg-green-500 rounded-3xl mx-auto flex items-center justify-center shadow-lg">

                <span class="text-white text-3xl font-bold">
                    S
                </span>

            </div>

            <h1 class="text-4xl font-bold text-gray-800 mt-5">
                SmartMaggot
            </h1>

            <p class="text-gray-400 mt-2">
                IoT Monitoring System
            </p>

        </div>

        <!-- Card -->
        <div class="bg-white rounded-[35px] shadow-xl p-10">

            <!-- Header -->
            <div class="mb-8 text-center">

                <h2 class="text-3xl font-bold text-gray-800">
                    Welcome Back 👋
                </h2>

                <p class="text-gray-400 mt-2">
                    Login untuk mengakses dashboard
                </p>

            </div>

            <!-- Error -->
            @if ($errors->any())

                <div class="bg-red-100 border border-red-300 text-red-600 p-4 rounded-2xl mb-6">

                    {{ $errors->first() }}

                </div>

            @endif

            <!-- Form -->
            <form action="{{ route('login') }}" method="POST">

                @csrf

                <!-- Email -->
                <div class="mb-6">

                    <label class="block text-gray-600 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="w-full border border-gray-200 rounded-2xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        required
                    >

                </div>

                <!-- Password -->
                <div class="mb-6">

                    <label class="block text-gray-600 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full border border-gray-200 rounded-2xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        required
                    >

                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-2 text-sm text-gray-500">

                        <input type="checkbox" name="remember">

                        Remember me

                    </label>

                    <a href="#" class="text-sm text-green-600 hover:underline">
                        Forgot Password?
                    </a>

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 transition text-white py-4 rounded-2xl font-semibold text-lg"
                >
                    Login
                </button>

            </form>

        </div>

        <!-- Footer -->
        <p class="text-center text-gray-400 text-sm mt-6">
            SmartMaggot © 2026
        </p>

    </div>

</body>
</html>