<!DOCTYPE html>
<html>
<head>
    <title>Form Pengajuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="max-w-2xl mx-auto mt-10">
    
    <div class="bg-white shadow-xl rounded-xl p-6">
        <h2 class="text-2xl font-bold text-slate-800 mb-6">
            Form Pengajuan Cuti / Izin
        </h2>

        <form class="space-y-4">

            <div>
    <label class="block text-sm font-medium text-gray-700">
        Nama
    </label>
    <input type="text" placeholder="Masukkan nama..."
        class="w-full mt-1 border p-2 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
</div>
            <!-- Jenis -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Jenis Pengajuan
                </label>
                <select class="w-full mt-1 border p-2 rounded focus:ring-2 focus:ring-blue-500">
                    <option>Cuti</option>
                    <option>Izin</option>
                    <option>Sakit</option>
                </select>
            </div>

            <!-- Tanggal Mulai -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Tanggal Mulai
                </label>
                <input type="date" 
                    class="w-full mt-1 border p-2 rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Tanggal Selesai -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Tanggal Selesai
                </label>
                <input type="date" 
                    class="w-full mt-1 border p-2 rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Alasan -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Alasan
                </label>
                <textarea rows="4"
                    class="w-full mt-1 border p-2 rounded focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Upload -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Dokumen Bukti
                </label>
                <input type="file"
                    class="w-full mt-1 border p-2 rounded bg-gray-50">
                <p class="text-sm text-gray-500 mt-1">
                    JPG, PNG, PDF (max 2MB)
                </p>
            </div>

            <!-- Button -->
            <div class="text-right">
                <button 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                    Ajukan
                </button>
            </div>

        </form>
    </div>

</div>

</body>
</html>