<!DOCTYPE html>
<html>
<head>
    <title>Data Pengajuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 h-screen bg-slate-900 text-white p-5">
        <h1 class="text-2xl font-bold mb-6">MartinApp</h1>

        <ul class="space-y-3">
            <li>
                <a href="/karyawan" class="block p-2 rounded bg-slate-700">Data Pengajuan</a>
            </li>
            <li>
                <a href="/karyawan/create" class="block p-2 rounded hover:bg-slate-700">Tambah Pengajuan</a>
            </li>
            <li>
                <a href="/karyawan/data_karyawan" class="block p-2 rounded hover:bg-slate-700">Data Karyawan</a>
            </li>
            <li>
                <a href="/absensi_karyawan" class="block p-2 rounded hover:bg-slate-700">Absensi Karyawan</a>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-6">

        <!-- Navbar -->
        <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between items-center">
            <h2 class="font-semibold text-lg">Data Pengajuan</h2>
            <span class="text-sm text-gray-500">Admin</span>
        </div>

        <!-- Card -->
        <div class="bg-white p-6 rounded-xl shadow">

            <!-- Header + Search -->
            <div class="flex justify-between items-center mb-4">

                <h2 class="text-xl font-bold text-slate-800">List Pengajuan</h2>

                <div class="flex items-center gap-3">

                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="Cari..."
                            class="pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none shadow-sm focus:shadow-md transition">

                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 absolute left-3 top-2.5 text-gray-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Button -->
                    <a href="/karyawan/create"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                       + Tambah
                    </a>

                </div>
            </div>

            <!-- Table -->
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100 text-slate-700">
                        <th class="p-3">ID</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Jenis</th>
                        <th class="p-3">Tanggal</th>
                        <th class="p-3">Alasan</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-3">1</td>
                        <td class="p-3">Nia</td>
                        <td class="p-3">Cuti</td>
                        <td class="p-3">2026-04-14</td>
                        <td class="p-3">Liburan ke Amazon</td>
                        <td class="p-3">
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-sm">
                                Disetujui
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-3">2</td>
                        <td class="p-3">Ney</td>
                        <td class="p-3">Izin</td>
                        <td class="p-3">2026-04-15</td>
                        <td class="p-3">Acara keluarga</td>
                        <td class="p-3">
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-sm">
                                Ditolak
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-3">3</td>
                        <td class="p-3">Uya Kuya</td>
                        <td class="p-3">Sakit</td>
                        <td class="p-3">2026-05-24</td>
                        <td class="p-3">Dirawat di rumah sakit</td>
                        <td class="p-3">
                            <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-sm">
                                Pending
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-3">4</td>
                        <td class="p-3">Livi</td>
                        <td class="p-3">Izin</td>
                        <td class="p-3">2025-03-29</td>
                        <td class="p-3">Pernikahan</td>
                        <td class="p-3">
                            <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-sm">
                                Pending
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-3">5</td>
                        <td class="p-3">Dino</td>
                        <td class="p-3">Cuti</td>
                        <td class="p-3">2027-08-01</td>
                        <td class="p-3">Liburan ke Balekambang Solo</td>
                        <td class="p-3">
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-sm">
                                Ditolak
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </main>

</div>
<footer class="bg-slate-900 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <p class="text-sm text-gray-400">
            © 2026 MartinApp. All rights reserved.
        </p>

        <div class="flex gap-4 text-sm">
            <a href="#" class="hover:text-blue-400 transition">About</a>
            <a href="#" class="hover:text-blue-400 transition">Contact</a>
            <a href="#" class="hover:text-blue-400 transition">Privacy</a>
        </div>

    </div>
</footer>


</body>
</html>