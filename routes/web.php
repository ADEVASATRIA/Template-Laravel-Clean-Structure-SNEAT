<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WEB\Auth\LoginController;
use App\Http\Controllers\WEB\Back\Dashboard\dashboardController;

// Group Route 
Route::group([], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'resgiter'])->name('register');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
});

Route::get('/error-page', function () {
    return view('content.error.misc-error');
});
