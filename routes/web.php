<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/karyawan');
});

Route::get('/karyawan', function () {
    $karyawan = [
        (object)[
            'id' => 1,
            'nama' => 'Budi',
            'jabatan' => 'Manager',
            'gaji' => 5000000
        ],
        (object)[
            'id' => 2,
            'nama' => 'Siti',
            'jabatan' => 'Admin',
            'gaji' => 3000000
        ]
    ];

    return view('karyawan.leaves.index', compact('karyawan'));
});

Route::get('/karyawan/create', function () {
    return view('karyawan.leaves.create');
});

Route::get('/karyawan/data_karyawan', function () {
    return view('karyawan.leaves.data_karyawan');
});

Route::get('/absensi_karyawan', function () {
    return view('karyawan.leaves.absensi_karyawan');
});