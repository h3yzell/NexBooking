<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IIUM Court Booking</title>
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/avenir-next-lt-pro" />
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/IIUM_Logo_2019.svg/2560px-IIUM_Logo_2019.svg.png" alt="IIUM Logo" class="h-12">
            </div>
            <button class="px-6 py-2 text-sm font-medium hover:text-[#00DDC0] transition-colors cursor-pointer">
                Login
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-16">
        <div class="confirmed text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-light mb-4 tracking-tight">IIUM Court Booking</h1>
            <p class="text-gray-500 text-lg font-light">Reserve your sports facility in just a few steps</p>
        </div>

        <form action="/bookings" method="POST" id="bookingForm">

        @csrf
        <input type="hidden" name="sport" id="selectedSport" value="" required>
        <input type="hidden" name="time_slot" id="selectedSession" value="" required>

        <section class="confirmed mb-16">
            <div class="mb-8">
                <h2 class="text-2xl font-light mb-2">Select Sport</h2>
                <div class="w-16 h-0.5 bg-[#00DDC0]"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="badminton">
                    <div class="text-4xl mb-4">🏸</div>
                    <h3 class="text-xl font-light">Badminton</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="tennis">
                    <div class="text-4xl mb-4">🥎</div>
                    <h3 class="text-xl font-light">Tennis</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="squash">
                    <div class="text-4xl mb-4">🥍</div>
                    <h3 class="text-xl font-light">Squash</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="basketball">
                    <div class="text-4xl mb-4">🏀</div>
                    <h3 class="text-xl font-light">Basketball</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="volleyball">
                    <div class="text-4xl mb-4">🏐</div>
                    <h3 class="text-xl font-light">Volleyball</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="futsal">
                    <div class="text-4xl mb-4">⚽</div>
                    <h3 class="text-xl font-light">Futsal</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="sepakTakraw">
                    <div class="text-4xl mb-4">🤸🏻‍♂️</div>
                    <h3 class="text-xl font-light">Sepak Takraw</h3>
                </div>
                <div class="sport-card border-2 border-gray-200 p-8 text-center rounded-lg" data-sport="handball">
                    <div class="text-4xl mb-4">🤾🏻‍♂️</div>
                    <h3 class="text-xl font-light">Handball</h3>
                </div>
            </div>
        </section>

        <!-- Step 2: Select Date -->
        <section class="confirmed mb-16">
            <div class="mb-8">
                <h2 class="text-2xl font-light mb-2">Select Date</h2>
                <div class="w-16 h-0.5 bg-[#00DDC0]"></div>
            </div>
            
            <div class="max-w-md">
                <input 
                    type="date" 
                    id="bookingDate"
                    name="booking_date"
                    value="{{ now()->addDay()->toDateString() }}"
                    min="{{ now()->toDateString() }}"
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-[#00DDC0] text-lg font-light"
                >
            </div>
        </section>

        <!-- Step 3: Select Session -->
        <section class="confirmed mb-16">
            <div class="mb-8">
                <h2 class="text-2xl font-light mb-2">Select Session</h2>
                <div class="w-16 h-0.5 bg-[#00DDC0]"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="8-10">
                    08:00 - 10:00
                </div>
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="10-12">
                    10:00 - 12:00
                </div>
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="12-14">
                    12:00 - 14:00
                </div>
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="15-17">
                    15:00 - 17:00
                </div>
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="17-19">
                    17:00 - 19:00
                </div>
                <div class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="20-22">
                    20:00 - 22:00
                </div>
            </div>
        </section>

        <button type="submit" class=" bg-[#00DDC0] text-white px-8 py-3 rounded-lg font-bold cursor-pointer" id="bookNowBtn">Book Now</button>

        </form>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 mt-24">
        <div class="max-w-7xl mx-auto px-6 py-8 text-center">
            <p class="text-gray-500 text-sm font-light">© 2024 International Islamic University Malaysia. All rights reserved.</p>
        </div>
    </footer>

    <script>

        const booking_limits = {
            badminton: 6,
            tennis: 4,
            squash: 4,
            basketball: 2,
            volleyball: 2,
            futsal: 1,
            sepakTakraw: 4,
            handball: 1,
        }

        const timeSlotLabels = {
            "8-10": "08:00 - 10:00",
            "10-12": "10:00 - 12:00",
            "12-14": "12:00 - 14:00",
            "15-17": "15:00 - 17:00",
            "17-19": "17:00 - 19:00",
            "20-22": "20:00 - 22:00"
        };

        
       
        document.querySelectorAll('.sport-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.sport-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');

                document.getElementById('selectedSport').value = this.getAttribute('data-sport');
                checkAvailability(this.getAttribute('data-sport'), document.getElementById('bookingDate').value);
            });
        });

        document.getElementById('bookingDate').addEventListener('change', function() {
            const selectedSport = document.getElementById('selectedSport').value;
            if (!selectedSport) return; 

            checkAvailability(selectedSport, this.value);

        });


        document.querySelectorAll('.session-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.disabled) return; 

                document.querySelectorAll('.session-btn').forEach(b => b.classList.remove('selected'));
                this.classList.add('selected');

                document.getElementById('selectedSession').value = this.getAttribute('data-session');
            });
        });

        function checkAvailability(selectedSport, selectedDate) {
            fetch(`/check-availability?sport=${selectedSport}&date=${selectedDate}`)
                .then(response => response.json())
                .then(data => {
                    document.querySelectorAll('.session-btn').forEach(btn => {
                        const session = btn.getAttribute('data-session');
                        const bookedCount = data[session] || 0;
                        const limit = booking_limits[selectedSport];

                        if (bookedCount >= limit) {
                            btn.innerHTML = `${timeSlotLabels[session]} <br><span class="text-xs text-red-500">(Full)</span>`;
                            btn.disabled = true;
                        } else {
                            btn.innerHTML = `${timeSlotLabels[session]} <br><span class="text-xs text-green-600">(${limit - bookedCount} left)</span>`;
                            btn.disabled = false;
                        }
                    });
                })
                .catch(error => console.error('Error fetching booking data:', error));
        }
        


    </script>
</body>
</html>