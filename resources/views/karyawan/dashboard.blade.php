<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 h-screen bg-slate-900 text-white p-5">
        <h1 class="text-2xl font-bold mb-6">MyApp</h1>

        <ul class="space-y-3">
            <li>
                <a href="/dashboard" class="block p-2 rounded bg-slate-700">Dashboard</a>
            </li>
            <li>
                <a href="/karyawan" class="block p-2 rounded hover:bg-slate-700">Cuti & Izin</a>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-6">

        <!-- Navbar -->
        <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between">
            <h2 class="font-semibold text-lg">Dashboard</h2>
            <span class="text-sm text-gray-500">User</span>
        </div>

        <!-- Card Welcome -->
        <div class="bg-white p-6 rounded-xl shadow mb-6 text-center">
            <h3 class="text-xl font-bold text-slate-800">
                Selamat datang, Alta 👋
            </h3>
            <p class="text-gray-500 mt-2">
                Dashboard Absensi Karyawan
            </p>
        </div>

        <!-- Card Jam -->
        <div class="bg-white p-6 rounded-xl shadow text-center">
            <p class="text-lg font-semibold">
                Hari Ini
            </p>
            <p class="text-4xl font-bold my-2" id="clock"></p>

            <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                Scan Absen (Dummy)
            </button>
        </div>

    </main>

</div>

<script>
    function updateClock() {
        const now = new Date();
        const time = now.toLocaleTimeString();
        document.getElementById('clock').textContent = time;
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>

</body>
</html>