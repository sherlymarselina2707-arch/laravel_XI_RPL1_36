<?php

use Illuminate\Support\Facades\Route;

// Halaman 1: Tentang Alam (About)
Route::get('/', function () {
    return view('halaman_satu');
});

// Halaman 2: Daftar Gunung di Jawa Timur
Route::get('/gunung-jatim', function () {
    return view('halaman_dua');
});