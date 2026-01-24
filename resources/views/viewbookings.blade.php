@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-light mb-8">My Bookings</h1>

    @if($bookings->isEmpty())
        <p class="text-gray-500">You have no bookings yet.</p>
    @else
        <div class="space-y-4">
            @foreach($bookings as $booking)
                @php
                    $isPast = \Carbon\Carbon::parse($booking->booking_date)->isPast();
                @endphp

                <div class="p-4 mb-2 rounded border transition-opacity
                            {{ $isPast ? 'opacity-50 pointer-events-none' : 'opacity-100 hover:bg-gray-100 cursor-pointer' }}">
                    <div>
                    <p>Sport: {{ $booking->sport }}</p>
                    <p>Date: {{ $booking->booking_date }}</p>
                    <p>Time Slot: {{ $booking->time_slot }}</p>
                    </div>

                    @if(!$isPast)
                        <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Cancel
                            </button>
                        </form>
                    @endif
                    
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@if(session('success_msg'))
    <script>
        alert("{{ session('success_msg') }}");
    </script>
@endif
@if(session('error_msg'))
    <script>
        alert("{{ session('error_msg') }}");
    </script>
@endif