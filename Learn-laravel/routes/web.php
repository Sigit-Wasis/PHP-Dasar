<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\UserController;

//untuk menampilkan user
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Menampilkan form tambah data
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Menyimpan data baru
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Menampilkan form edit data
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Menyimpan data yang telah diubah
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Menghapus data
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Nasabah

use App\Http\Controllers\NasabahController;

Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');

//tambah nasabah
Route::get('/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');
Route::post('/nasabah/store', [NasabahController::class, 'store'])->name('nasabah.store');

//edit nasabah
Route::get('/nasabah/{id_nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');
Route::put('/nasabah/{id_nasabah}', [NasabahController::class, 'update'])->name('nasabah.update');