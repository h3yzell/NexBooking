<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('booking-page');
});

Route::post('/bookings', [BookingController::class, 'store']);

Route::get('/check-availability', [BookingController::class, 'checkAvailability']);
