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
