<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/matakuliah', function () {
    return ' awokwok';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama Saya : ' . $param1;
});

Route::get('/nim/{param1}', function ($param1 = '') {
    return 'Nim Saya : ' . $param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index'])->name(name: 'home');
//hahahahah

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//pelanggan 
Route::resource('pelanggan', PelangganController::class);

//user
Route::resource('user', UserController::class);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');

