<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIUM Court Booking</title>
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/avenir-next-lt-pro" />
    @vite('resources/css/app.css')
</head>
<body>
    <header class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/IIUM_Logo_2019.svg/2560px-IIUM_Logo_2019.svg.png" alt="IIUM Logo" class="h-12">
            </div>
            <div class="rounded-lg flex items-center gap-10">
                <div class="text-sm font-medium hover:text-[#00DDC0] transition-colors cursor-pointer">
                    {{ $matric_no }}
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="rounded-lg py-2 px-4 text-sm font-medium bg-red-500 text-white transition-colors cursor-pointer">Log Out</button>
                </form>
            </div>
        </div>
    </header>

@section('title', 'Booking Confirmed!')

@section('content')
<section id="confirmationSection">
    <div class="text-center py-12">
        <div class="w-20 h-20 bg-[#00DDC0] rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h2 class="text-3xl font-light mb-4">Booking Confirmed!</h2>
        <p class="text-gray-500 mb-8 font-light">Your court has been successfully reserved.</p>
        
        <div class="bg-gray-50 rounded-lg p-8 max-w-md mx-auto mb-8 text-left">
            <h3 class="text-xl font-light mb-4 text-center">Booking Summary</h3>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between py-2 border-b border-gray-200">
                    <span class="text-gray-600 font-light">Court Type:</span>
                    <span id="confirmSport" class="font-medium capitalize">{{ $sport_type }}</span>
                </div>
                
                <h2 class="text-3xl font-light mb-4">Booking Confirmed!</h2>
                <p class="text-gray-500 mb-8 font-light">Your court has been successfully reserved.</p>
                
                <div class="bg-gray-50 rounded-lg p-8 max-w-md mx-auto mb-8 text-left">
                    <h3 class="text-xl font-light mb-4 text-center">Booking Summary</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Court Type:</span>
                            <span id="confirmSport" class="font-medium capitalize">{{ $sport_type }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Date:</span>
                            <span id="confirmDate" class="font-medium">{{ $booking_date }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Session:</span>
                            <span id="confirmSession" class="font-medium">{{ $session_time }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Name:</span>
                            <span id="confirmName" class="font-medium">{{ $name }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-light">Matric No:</span>
                            <span id="confirmMatric" class="font-medium">{{ $matric_no }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-200">
                    <span class="text-gray-600 font-light">Session:</span>
                    <span id="confirmSession" class="font-medium">{{ $session_time }}</span>
                </div>
                <div class="flex justify-between py-2 border-b border-gray-200">
                    <span class="text-gray-600 font-light">Name:</span>
                    <span id="confirmName" class="font-medium">Nigga</span>
                </div>
                <div class="flex justify-between py-2">
                    <span class="text-gray-600 font-light">Matric No:</span>
                    <span id="confirmMatric" class="font-medium">2413257</span>
                </div>
            </div>
        </div>
        
        <div class="flex gap-4 justify-center">
            <a 
                id="viewBookingBtn"
                class="px-8 py-3 bg-[#00DDC0] text-white rounded-lg font-light hover:bg-opacity-90 transition-all cursor-pointer"
            >
                View My Bookings
            </a>
            <a 
                id="newBookingBtn"
                href="/"
                class="px-8 py-3 border-2 border-gray-200 rounded-lg font-light hover:border-[#00DDC0] transition-all cursor-pointer"
            >
                New Booking
            </a>
        </div>
    </div>
</section>
@endsection