<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{

    public function index(){
        if (! session()->has('matric_no') && ! session()->has('name')) {
            return view('login', [
                'invalid' => true,
                'error_msg' => 'No session found. Please log in.',
            ]);
        } else {
            return view("booking-page", ["matric_no" => session('matric_no')]);
        }
    }

    public function store(Request $request) {
        
        
        $booking = $request->validate([
            'sport' => 'required',
            'booking_date' => 'required|date',
            'time_slot' => 'required'
        ]);

        $booking['matric_no'] = session('matric_no');

        Booking::create($booking);


        return view("confirmation", [
            "sport_type" => $booking['sport'],
            "booking_date" => $booking['booking_date'],
            "session_time" => $booking['time_slot'],
            "name" => session('name'),
            "matric_no" => session('matric_no')
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
