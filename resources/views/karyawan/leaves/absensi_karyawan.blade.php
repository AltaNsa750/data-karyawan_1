<!DOCTYPE html>
<html>
<head>
    <title>Absensi Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 flex flex-col min-h-screen">

<div class="flex flex-1">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white p-5">
        <h1 class="text-2xl font-bold mb-6">MartinApp</h1>

        <ul class="space-y-3">
            <li><a href="/" class="block p-2 rounded hover:bg-slate-700">Data Pengajuan</a></li>
            <li><a href="/karyawan/create" class="block p-2 rounded hover:bg-slate-700">Tambah Pengajuan</a></li>
            <li><a href="/karyawan/data_karyawan" class="block p-2 rounded hover:bg-slate-700">Data Karyawan</a></li>
            <li><a href="/absensi_karyawan" class="block p-2 rounded bg-slate-700">Absensi Karyawan</a></li>
        </ul>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-6">

        <!-- Navbar -->
        <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between">
            <h2 class="font-semibold text-lg">Absensi Karyawan</h2>
            <span class="text-sm text-gray-500">Admin</span>
        </div>

        <!-- Card -->
        <div class="bg-white p-6 rounded-xl shadow">

            <!-- Header + Search -->
            <div class="flex justify-between items-center mb-4">

                <h2 class="text-xl font-bold">List Absensi</h2>

                <div class="relative">
                    <input type="text" id="searchAbsensi" placeholder="Cari absensi..."
                        class="pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none shadow-sm">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 absolute left-3 top-2.5 text-gray-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

            </div>

            <!-- Table (MASUK KE DALAM CARD) -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3">ID</th>
                            <th class="p-3">Nama</th>
                            <th class="p-3">Tanggal</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="border-b hover:bg-slate-50">
                            <td class="p-3">1</td>
                            <td class="p-3">Sean</td>
                            <td class="p-3">2026-04-18</td>
                            <td class="p-3 status text-gray-500">Sudah Absen</td>
                            <td class="p-3">
                                <button onclick="setStatus(this,'Hadir')"
                                    class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded text-white">
                                    Hadir
                                </button>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-slate-50">
                            <td class="p-3">2</td>
                            <td class="p-3">Keonho</td>
                            <td class="p-3">2026-04-18</td>
                            <td class="p-3 status text-gray-500">Sudah Absen</td>
                            <td class="p-3">
                                <button onclick="setStatus(this,'Izin')"
                                    class="bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded text-white">
                                    Izin
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </main>

</div>

<!-- Footer -->
<footer class="bg-slate-900 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <p class="text-sm text-gray-400">
            © 2026 MartinApp. All rights reserved.
        </p>

        <div class="flex gap-4 text-sm">
            <a href="#" class="hover:text-blue-400">About</a>
            <a href="#" class="hover:text-blue-400">Contact</a>
            <a href="#" class="hover:text-blue-400">Privacy</a>
        </div>
    </div>
</footer>

</body>
</html>