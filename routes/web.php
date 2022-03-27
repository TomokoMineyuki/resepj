<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/', [ShopController::class, 'search'])->name('shop.search');
Route::get('/detail/{id?}', [ShopController::class, 'detail'])->name('shop.detail');
Route::get('/register', [AuthenticationController::class, 'showRegister']);
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::get('/thanks', [AuthenticationController::class, 'thanks']);
Route::get('/login', [AuthenticationController::class, 'showLogin']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::get('/done', [ReservationController::class, 'done']);
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation');
Route::get('/reservation/{reservation_id}', [ReservationController::class, 'destroy']);
Route::get('/mypage', [UserController::class, 'index']);

