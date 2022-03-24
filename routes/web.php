<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/', [ShopController::class, 'search'])->name('shop.search');
Route::get('/register', [AuthenticationController::class, 'showRegister']);
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::get('/thanks', [AuthenticationController::class, 'thanks']);
Route::get('/login', [AuthenticationController::class, 'showLogin']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

