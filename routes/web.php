<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.process');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

    Route::prefix('petugas')
        ->name('petugas.')
        ->middleware('role:petugas')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard.petugas');
            })->name('dashboard');
        });

    Route::prefix('pemilik')
        ->name('pemilik.')
        ->middleware('role:pemilik')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard.pemilik');
            })->name('dashboard');
        });
});
