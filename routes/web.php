<?php

use App\Http\Controllers\PersonalityController;
use Illuminate\Support\Facades\Route;

// Main route
Route::get('/', [PersonalityController::class, 'showForm'])->name('personality.form');
