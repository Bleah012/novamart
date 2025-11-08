<?php

use Illuminate\Support\Facades\Route;

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Products
Route::resource('products', ProductController::class)->middleware('auth');

// Orders
Route::resource('orders', OrderController::class)->middleware('auth');

