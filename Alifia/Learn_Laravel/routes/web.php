<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', function () {
//     return "<H2>SELAMAT DATANG</H2>";
// });

Route::get('/index',[HomeController::class,'index']);
Route::get('/buku',[BukuController::class,'buku']);