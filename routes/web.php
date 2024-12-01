<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\SoalSiswaController;
use App\Http\Controllers\DataMateriController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function () {
    return view('home.index');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'proses');
    Route::get('/logout', 'logout');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [DashboardController::class, 'profile']);

Route::resource('users', UserController::class);
Route::resource('angkatans', AngkatanController::class);
Route::resource('dmateris', DataMateriController::class);
Route::resource('soals', SoalSiswaController::class);
