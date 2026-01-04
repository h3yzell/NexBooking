<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'IIUM Court Booking')</title>
    
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/avenir-next-lt-pro" />
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">
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

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 mt-24">
        <div class="max-w-7xl mx-auto px-6 py-8 text-center">
            <p class="text-gray-500 text-sm font-light">© {{ date('Y') }} International Islamic University Malaysia. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>