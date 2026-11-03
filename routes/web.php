<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Middleware\LogAksesMahasiswa;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-saya', function () {
    return "Ini adalah halaman tentang saya";
});

Route::get('/profil', function () {
    $nama = "Andrean Satria Bagaskara";
    $jurusan = "Teknik Informatika";
    return view('profil', compact('nama', 'jurusan'));
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/mahasiswa/download/{mahasiswa}', [MahasiswaController::class, 'download'])->name('mahasiswa.download');

Route::middleware([LogAksesMahasiswa::class])->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
        ->name('mahasiswa.index');

    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])
        ->name('mahasiswa.create');
        
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])
        ->name('mahasiswa.store');

    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
        ->name('mahasiswa.edit');

    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])
        ->name('mahasiswa.update');

    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
        ->name('mahasiswa.destroy');

    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])
        ->name('mahasiswa.show');
});