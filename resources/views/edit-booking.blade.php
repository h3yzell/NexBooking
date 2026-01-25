@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-lg p-8">
        
        <!-- Title -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
            Edit Booking
        </h2>

        <!-- Form -->
        <form method="POST" action="{{ route('bookings.update', $booking->id) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Sport -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Sport
                </label>

                <select name="sport"
                    class="w-full rounded-lg border-gray-300 focus:border-[#00DDC0] focus:ring-[#00DDC0]"
                    required>

                    <option value="" disabled>Select a sport</option>

                    <option value="Futsal" {{ $booking->sport == 'Futsal' ? 'selected' : '' }}>
                        Futsal
                    </option>
                    <option value="Badminton" {{ $booking->sport == 'Badminton' ? 'selected' : '' }}>
                        Badminton
                    </option>
                    <option value="Basketball" {{ $booking->sport == 'Basketball' ? 'selected' : '' }}>
                        Basketball
                    </option>
                    <option value="Tennis" {{ $booking->sport == 'Tennis' ? 'selected' : '' }}>
                        Tennis
                    </option>
                    <option value="Squash" {{ $booking->sport == 'Squash' ? 'selected' : '' }}>
                        Squash
                    </option>
                    <option value="Volleyball" {{ $booking->sport == 'Volleyball' ? 'selected' : '' }}>
                        Volleyball
                    </option>
                    <option value="Sepak Takraw" {{ $booking->sport == 'Sepak Takraw' ? 'selected' : '' }}>
                        Sepak Takraw
                    </option>
                    <option value="Handball" {{ $booking->sport == 'Handball' ? 'selected' : '' }}>
                        Handball
                    </option>

                </select>
            </div>

            <!-- Date -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Booking Date
                </label>
                <input type="date" name="booking_date"
                    value="{{ $booking->booking_date }}"
                    class="w-full rounded-lg border-gray-300 focus:border-[#00DDC0] focus:ring-[#00DDC0]"
                    required>
            </div>

            <!-- Time Slot -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Time Slot
                </label>
                <select name="time_slot"
                    class="w-full rounded-lg border-gray-300 focus:border-[#00DDC0] focus:ring-[#00DDC0]"
                    required>
                    <option value="8AM - 10AM" {{ $booking->time_slot == '8AM - 10AM' ? 'selected' : '' }}>8AM - 10AM</option>
                    <option value="10AM - 12PM" {{ $booking->time_slot == '10AM - 12PM' ? 'selected' : '' }}>10AM - 12PM</option>
                    <option value="2PM - 4PM" {{ $booking->time_slot == '2PM - 4PM' ? 'selected' : '' }}>2PM - 4PM</option>
                    <option value="4PM - 6PM" {{ $booking->time_slot == '4PM - 6PM' ? 'selected' : '' }}>4PM - 6PM</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">
                <a href="{{ url('/viewbookings') }}"
                   class="text-sm text-gray-500 hover:text-gray-700">
                    ← Back
                </a>

                <button type="submit"
                    class="bg-[#00DDC0] text-white px-6 py-2 rounded-lg font-medium hover:opacity-90 transition">
                    Update Booking
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
