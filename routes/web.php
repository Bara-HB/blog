<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'show']); // Přesměrování na index
Route::get('/article', [HomeController::class, 'articles']); // Přesměrování na články
Route::get('/contact', [HomeController::class, 'contact']); // Přesměrování na kontakt

Route::get('/log', [AuthController::class, 'showLog']); // Přesměrování na log
Route::get('/register', [AuthController::class, 'showRegister']); // Přesměrování na registrační stránku


Route::post('/log', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Posílání dat článků do databáze
Route::get('/dashboard', [DashboardController::class, 'show'])
  ->middleware(['auth'])
  ->name('dashboard');

// Posílání dat článků do databáze
Route::post('/dashboard', [DashboardController::class, 'store'])
  ->middleware(['auth'])
  ->name('store.dashboard');

