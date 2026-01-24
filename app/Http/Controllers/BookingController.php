<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

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

        public function viewBookings()
    {
        if (!session()->has('matric_no')) {
            return redirect('/login')->with('error_msg', 'Please log in first.');
        }

        $matric_no = session('matric_no');

        $bookings = Booking::where('matric_no', $matric_no)
            ->orderBy('booking_date', 'desc')
            ->get();

        return view('viewbookings', compact('bookings'));
    }
    public function cancelBooking($id)
    {
        // Get the booking
        $booking = Booking::find($id);

        // Check if booking exists
        if (!$booking) {
            return redirect()->back()->with('error_msg', 'Booking not found.');
        }

        // Check if the booking belongs to the logged-in user
        if ($booking->matric_no !== session('matric_no')) {
            return redirect()->back()->with('error_msg', 'You cannot cancel this booking.');
        }

        // Check if the booking date is in the past
        if (\Carbon\Carbon::parse($booking->booking_date)->isPast()) {
            return redirect()->back()->with('error_msg', 'Cannot cancel past bookings.');
        }

        // Delete the booking
        $booking->delete();

        return redirect()->back()->with('success_msg', 'Booking canceled successfully.');
    }
    


}
