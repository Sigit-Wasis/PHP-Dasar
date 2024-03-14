<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});
Route::get('/dasboard', function () {
    return view('backend.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/backend.app', [App\Http\Controllers\AuthController::class, '___construct'])->name('app');