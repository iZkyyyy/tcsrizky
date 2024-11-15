<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataMateriController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\KumpulSiswaController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\SoalSiswaController;

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

Route::get('/', function () {
    return view('layout');
});

Route::resource('users', UserController::class);
Route::resource('angkatans', AngkatanController::class);
Route::resource('dmateris', DataMateriController::class);
Route::resource('kumpuls', KumpulSiswaController::class);
Route::resource('nilais', NilaiSiswaController::class);
Route::resource('soals', SoalSiswaController::class);

Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
//siswa
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);

//instruktur
Route::get('/instruktur', [App\Http\Controllers\InstrukturController::class, 'index']);

//pimpinan
Route::get('/pimpinan', [App\Http\Controllers\PimpinanController::class, 'index']);
