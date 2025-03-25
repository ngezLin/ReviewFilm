<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protect admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});

// Protect reviewer routes
Route::middleware(['auth', 'role:reviewer'])->group(function () {
    Route::get('/reviewer', function () {
        return view('reviewer.index');
    });
});

// Protect guest routes
Route::get('/guest', function () {
    return view('guest.index');
});
