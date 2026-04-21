<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 flex flex-col min-h-screen">

<div class="flex flex-1">

    <aside class="w-64 bg-slate-900 text-white p-5">
        <h1 class="text-2xl font-bold mb-6">MartinApp</h1>

        <ul class="space-y-3">
            <li>
                <a href="/" class="block p-2 rounded hover:bg-slate-700">Data Pengajuan</a>
            </li>
            <li>
                <a href="/karyawan/create" class="block p-2 rounded hover:bg-slate-700">Tambah Pengajuan</a>
            </li>
            <li>
                <a href="/data_karyawan" class="block p-2 rounded bg-slate-700">Data Karyawan</a>
            </li>
            <li>
                <a href="/absensi_karyawan" class="block p-2 rounded hover:bg-slate-700">Absensi Karyawan</a>
            </li>
        </ul>
    </aside>

    <main class="flex-1 p-6">

        <div class="bg-white p-4 rounded-xl shadow mb-6 flex justify-between">
            <h2 class="font-semibold text-lg">Data Karyawan</h2>
            <span class="text-sm text-gray-500">Admin</span>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">

            <h2 class="text-xl font-bold mb-4">List Karyawan</h2>

            <!-- FIX SEARCH -->
            <div class="relative mb-4 w-72">
                <input type="text" id="searchKaryawan" placeholder="Cari karyawan..."
                    class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none shadow-sm">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 absolute left-3 top-3 text-gray-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <table class="w-full text-left">
                <thead class="bg-slate-100">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Jabatan</th>
                        <th class="p-3">Alamat</th>
                        <th class="p-3">No HP</th>
                    </tr>
                </thead>

                <tbody id="tableBody">

                    <!-- FIX TR -->
                    <tr class="border-b">
                        <td class="p-3">1</td>
                        <td class="p-3">Sean</td>
                        <td class="p-3">Manager</td>
                        <td class="p-3">Jl. Merdeka No. 123</td>
                        <td class="p-3">08128292922</td>
                    </tr>

                    <!-- FIX TR -->
                    <tr class="border-b">
                        <td class="p-3">2</td>
                        <td class="p-3">Juhoon</td>
                        <td class="p-3">Staff</td>
                        <td class="p-3">Jl. Sudirman No. 456</td>
                        <td class="p-3">08128292923</td>
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
            <a href="#" class="hover:text-blue-400">About</a>
            <a href="#" class="hover:text-blue-400">Contact</a>
            <a href="#" class="hover:text-blue-400">Privacy</a>
        </div>

    </div>
</footer>

</body>
</html>