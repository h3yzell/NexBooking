<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StudentController;



// Booking Controller endpoints
Route::get('/bookings', [BookingController::class, 'index']);
Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/check-availability', [BookingController::class, 'checkAvailability']);

// Student Auth Endpoints
Route::get('/', [StudentController::class, 'index']);
Route::post('/login', [StudentController::class, 'login']);
Route::post('/logout', [StudentController::class, 'logout']);