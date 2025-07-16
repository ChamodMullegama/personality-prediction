<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthControllerr;
use App\Http\Controllers\PersonalityController;
use Illuminate\Support\Facades\Route;

// Main route
Route::get('/', [PersonalityController::class, 'showForm'])->name('personality.form');


// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Personality routes
Route::prefix('personality')->group(function () {
    Route::post('/predict', [PersonalityController::class, 'predict'])->name('personality.predict');
    Route::get('/account', [PersonalityController::class, 'showAccount'])->name('personality.account')->middleware('auth');
});

