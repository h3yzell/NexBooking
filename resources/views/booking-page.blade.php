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

        <!-- Step 1: Select Sport -->
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
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="8-10">
                    08:00 - 10:00
                </button>
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="10-12">
                    10:00 - 12:00
                </button>
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="12-14">
                    12:00 - 14:00
                </button>
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="15-17">
                    15:00 - 17:00
                </button>
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="17-19">
                    17:00 - 19:00
                </button>
                <button class="session-btn border-2 border-gray-200 py-4 px-6 rounded-lg text-center font-light text-lg" data-session="20-22">
                    20:00 - 22:00
                </button>
            </div>
        </section>

        <!-- Step 4: User Details -->
        <section class="confirmed mb-16">
            <div class="mb-8">
                <h2 class="text-2xl font-light mb-2">Your Details</h2>
                <div class="w-16 h-0.5 bg-[#00DDC0]"></div>
            </div>
            
            <form id="bookingForm" class="space-y-6 max-w-2xl">
                <div>
                    <label class="block text-sm font-light text-gray-600 mb-2">Full Name</label>
                    <input 
                        type="text" 
                        id="userName"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-[#00DDC0] font-light"
                        placeholder="Enter your full name"
                        required
                    >
                </div>
                
                <div>
                    <label class="block text-sm font-light text-gray-600 mb-2">Matric Number</label>
                    <input 
                        type="text" 
                        id="matricNo"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-[#00DDC0] font-light"
                        placeholder="Enter your matric number"
                        required
                    >
                </div>
                
                <div>
                    <label class="block text-sm font-light text-gray-600 mb-2">Email</label>
                    <input 
                        type="email" 
                        id="userEmail"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-[#00DDC0] font-light"
                        placeholder="your.email@example.com"
                        required
                    >
                </div>
                
                <div>
                    <label class="block text-sm font-light text-gray-600 mb-2">Phone Number</label>
                    <input 
                        type="tel" 
                        id="userPhone"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-[#00DDC0] font-light"
                        placeholder="01X-XXX XXXX"
                        required
                    >
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-[#00DDC0] text-white py-4 rounded-lg font-light text-lg hover:bg-opacity-90 transition-all mt-8 cursor-pointer"
                >
                    Complete Booking
                </button>
            </form>
        </section>

        <!-- Step 5: Booking Confirmation -->
        <section id="confirmationSection" class="hidden">
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
                            <span class="text-gray-600 font-light">Sport:</span>
                            <span id="confirmSport" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Date:</span>
                            <span id="confirmDate" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Session:</span>
                            <span id="confirmSession" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200">
                            <span class="text-gray-600 font-light">Name:</span>
                            <span id="confirmName" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-light">Matric No:</span>
                            <span id="confirmMatric" class="font-medium"></span>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-4 justify-center">
                    <button 
                        id="viewBookingBtn"
                        class="px-8 py-3 bg-[#00DDC0] text-white rounded-lg font-light hover:bg-opacity-90 transition-all cursor-pointer"
                    >
                        View My Bookings
                    </button>
                    <button 
                        id="newBookingBtn"
                        class="px-8 py-3 border-2 border-gray-200 rounded-lg font-light hover:border-[#00DDC0] transition-all cursor-pointer"
                    >
                        New Booking
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 mt-24">
        <div class="max-w-7xl mx-auto px-6 py-8 text-center">
            <p class="text-gray-500 text-sm font-light">© 2024 International Islamic University Malaysia. All rights reserved.</p>
        </div>
    </footer>

    <style>
        * {
            font-family: 'Avenir Next LT Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .session-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background-color: #f3f4f6; 
            border-color: #e5e7eb;
            color: #9ca3af;
            transform: none; 
        }

        .session-btn:disabled:hover {
            background-color: #f3f4f6;
        }
        
        .sport-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .sport-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 221, 192, 0.15);
        }
        
        .sport-card.selected {
            border-color: #00DDC0;
            background-color: rgba(0, 221, 192, 0.05);
        }

        .session-btn {
            transition: all 0.2s ease;
            cursor: pointer;
        }
        
        .session-btn:hover {
            background-color: rgba(0, 221, 192, 0.1);
        }
        
        .session-btn.selected {
            background-color: #00DDC0;
            color: white;
        }
        
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(70%) sepia(50%) saturate(500%) hue-rotate(130deg);
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const bookingLimits = {
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

        function checkAvailability() {
            const selectedSportElem = document.querySelector('.sport-card.selected');
            const selectedDate = document.getElementById('bookingDate').value;

            if (!selectedSportElem || !selectedDate) return;

            const sport = selectedSportElem.dataset.sport;
            const limit = bookingLimits[sport];

            document.querySelectorAll('.session-btn').forEach(btn => {
                btn.disabled = false;
                
                const rawSession = btn.dataset.session;
                btn.innerHTML = timeSlotLabels[rawSession];
            });

            fetch(`/check-availability?sport=${sport}&date=${selectedDate}`)
                .then(response => response.json())
                .then(data => {
                    
                    document.querySelectorAll('.session-btn').forEach(btn => {
                        const sessionTime = btn.dataset.session;
                        const displayTime = timeSlotLabels[sessionTime];
                        const currentCount = data[sessionTime] || 0; 

                        if (currentCount >= limit) {
                            btn.disabled = true;
                            btn.classList.remove('selected'); 
                            btn.innerHTML = `${displayTime} <br><span class="text-xs text-red-500">(Full)</span>`;
                        } else {
                            // Show spots left
                            const left = limit - currentCount;
                            btn.innerHTML = `${displayTime} <br><span class="text-xs text-green-600">(${left} left)</span>`;
                        }
                    });
                })
                .catch(error => console.error('Error fetching availability:', error));
        }
       
        document.querySelectorAll('.sport-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.sport-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                
                checkAvailability();
            });
        });

        document.getElementById('bookingDate').addEventListener('change', function() {
            checkAvailability();
        });

        document.querySelectorAll('.session-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.disabled) return; 

                document.querySelectorAll('.session-btn').forEach(b => b.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const selectedSport = document.querySelector('.sport-card.selected')?.dataset.sport;
            const selectedDate = document.getElementById('bookingDate').value;
            const selectedSession = document.querySelector('.session-btn.selected')?.dataset.session;
            const userName = document.getElementById('userName').value;
            const matricNo = document.getElementById('matricNo').value;
            const phoneNumber = document.getElementById('userPhone').value;
            const userEmail = document.getElementById('userEmail').value;

            const data = {
                sport: selectedSport,
                booking_date: selectedDate,
                time_slot: selectedSession,
                name: userName,
                matric_number: matricNo,
                email: userEmail,
                phone_number: phoneNumber,
            };

            if (!selectedSport || !selectedDate || !selectedSession) {
                alert('Please complete all selections before submitting');
                return;
            }


            fetch('/bookings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Server error');
                    }
                    return response.json();
                })
                .then(result => {
                    // if saved successfully → show confirmation

                    document.getElementById('confirmSport').textContent = selectedSport.charAt(0).toUpperCase() + selectedSport.slice(1);
                    document.getElementById('confirmDate').textContent = selectedDate;
                    document.getElementById('confirmSession').textContent = selectedSession.replace('-', ':00 - ') + ':00';
                    document.getElementById('confirmName').textContent = userName;
                    document.getElementById('confirmMatric').textContent = matricNo;
                    
                    document.querySelectorAll('.confirmed').forEach(s => s.classList.add('hidden'));
                    document.getElementById('confirmationSection').classList.remove('hidden');

                    alert(result.message);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while processing your booking. Please try again.');
                });  
        });

        document.getElementById('newBookingBtn').addEventListener('click', function() {
            location.reload();
        });
    </script>
</body>
</html>