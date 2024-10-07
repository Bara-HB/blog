<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Route::get('/', [HomeController::class, 'show'])->name('index');
Route::get('/', [HomeController::class, 'show']);
Route::get('/article', [HomeController::class, 'articles']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/log', [AuthController::class, 'log']);
Route::post('/log', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

