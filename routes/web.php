<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;


Route::get('/', function () {
    return view('welcome');
});

// Protect guest routes
Route::get('/guest', function () {
    return view('guest.index');
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

    Route::get('/admin/index-film', [FilmController::class, 'index'])->name('admin.films');
    Route::get('/admin/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
    Route::put('/admin/films/{film}', [FilmController::class, 'update'])->name('films.update');
    Route::delete('/admin/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy');

    Route::get('/admin/create-film', [FilmController::class, 'create'])->name('admin.films.create');
    Route::post('/admin/store-film', [FilmController::class, 'store'])->name('admin.films.store');

});

// Protect reviewer routes
Route::middleware(['auth', 'role:reviewer'])->group(function () {
    Route::get('/reviewer', function () {
        return view('reviewer.index');
    });
});

Route::resource('films', FilmController::class);
