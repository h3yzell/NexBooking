<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request) {
        $incomingFields = $request->validate([
            'sport' => 'required',
            'booking_date' => 'required|date',
            'time_slot' => 'required',
            'name' => 'required',
            'matric_number' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);
        Booking::create($incomingFields);
        return response()->json(['message' => 'Booking created successfully!'], 201);
    }

    public function checkAvailability(Request $request)
    {
        $sport = $request->query('sport');
        $date = $request->query('date');

        $bookings = Booking::where('sport', $sport)
            ->where('booking_date', $date)
            ->select('time_slot', DB::raw('count(*) as total'))
            ->groupBy('time_slot')
            ->pluck('total', 'time_slot')
            ->toArray();

        return response()->json($bookings);
    }
}
