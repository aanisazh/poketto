<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Dummy Dashboard (untuk ngetes login berhasil atau tidak)
Route::get('/dashboard', function () {
    return "<h1>Selamat Datang, " . Auth::user()->name . "!</h1><form action='/logout' method='POST'>" . csrf_field() . "<button type='submit'>Logout</button></form>";
})->middleware('auth');
