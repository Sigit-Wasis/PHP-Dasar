<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/belajarlaravel', function () {
    return '<h1>selamat belajar laravel 10 ivan</h1>';
});

Route::get('/about', function(){
    return'<h2>ini halaman about ivan</h2>';
});

Route::get('/perkalian', function(){
    return  9*5;
});
