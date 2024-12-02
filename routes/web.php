<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index']);
Auth::routes();

Route::resource('/reservations',App\Http\Controllers\ReservationController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
