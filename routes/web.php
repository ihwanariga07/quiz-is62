<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk autentikasi (login, register, reset password, dll)
Auth::routes();

// Route untuk halaman utama setelah login
Route::get('/home', [HomeController::class, 'index'])->name('home');
