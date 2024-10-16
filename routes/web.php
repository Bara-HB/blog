<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;


// Přesměrování na index
Route::get('/', [HomeController::class, 'show']); 
// Přesměrování na články
Route::get('/article', [HomeController::class, 'articles']); 
// Přesměrování na kontakt
Route::get('/contact', [HomeController::class, 'contact']); 

// Přesměrování na log
Route::get('/log', [AuthController::class, 'showLog']); 
// Přesměrování na registrační stránku
Route::get('/register', [AuthController::class, 'showRegister']); 

// Odesílání dat pro přihlášení a registraci
Route::post('/log', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Posílání dat článků do databáze
Route::get('/dashboard', [DashboardController::class, 'show'])
    ->middleware(['auth'])
    ->name('dashboard');

// Uložení dat článků do databáze
Route::post('/dashboard', [DashboardController::class, 'store'])
    ->middleware(['auth'])
    ->name('store.dashboard');

// Smazání článků
Route::post('/dashboard_delete', [DashboardController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('destroy.dashboard');

// Trasy pro blogy
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index'); // Pro seznam blogů
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show'); // Pro zobrazení jednoho blogu

// Trasa pro zobrazení domovské stránky
Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show');