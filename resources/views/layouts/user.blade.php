<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Panel</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">

    <div class="w-64 h-screen bg-green-900 text-white p-5">

        <h1 class="text-2xl font-bold mb-8">
            USER
        </h1>

        <ul class="space-y-3">

            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/sensors">Sensors</a></li>
            <li><a href="/education">Education</a></li>
            <li><a href="/modules">Modules</a></li>

        </ul>

    </div>

    <div class="flex-1 p-6">
        @yield('content')
    </div>

</div>

</body>
</html>