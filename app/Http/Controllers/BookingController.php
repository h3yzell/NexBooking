<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request) {
        
        
        $booking = $request->validate([
            'sport' => 'required',
            'booking_date' => 'required|date',
            'time_slot' => 'required'
        ]);

        Booking::create($booking);


        return view("confirmation", [
            "sport_type" => $booking['sport'],
            "booking_date" => $booking['booking_date'],
            "session_time" => $booking['time_slot']
        ]);
    }

    public function checkAvailability(Request $request)
    {
        $sport = $request->query('sport');
        $date = $request->query('date');

        $bookings = Booking::where('sport', $sport)->groupBy('time_slot')
            ->select('time_slot', DB::raw('COUNT(*) as total_booked'))
            ->where('booking_date', $date)
            ->get()
            ->pluck('total_booked', 'time_slot');
        
            
        return response()->json($bookings);
    }
}
