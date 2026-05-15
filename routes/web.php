<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Site
Route::get('/', [SiteController::class, 'index'])->name('site.index');


// Auth
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});