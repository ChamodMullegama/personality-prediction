<?php

use App\Http\Controllers\AuthControllerr;
use App\Http\Controllers\PersonalityController;
use Illuminate\Support\Facades\Route;

// Main route
Route::get('/', [PersonalityController::class, 'showForm'])->name('personality.form');


// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthControllerr::class, 'showRegister'])->name('auth.register');
});
