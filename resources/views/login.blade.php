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
   
    <section class="flex justify-center items-center h-screen">
        
        <!--Login Box-->
        <div class="flex flex-col p-5 w-md rounded-lg shadow-lg gap-4">
            <header class="border-b border-gray-200">
                <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                    <div class="flex items-center text-2xl">
                        IIUM Court Booking Login
                    </div>
                </div>
            </header>

            @if ($invalid == true)
            <div class="flex flex-col">
                <p class="text-red-500">
                    {{ $error_msg }}
                </p>
            </div>
            @endif

            <form action="/login" method="POST" class="flex flex-col">
                @csrf
            <div class="flex flex-col gap-2 my-4">
                Matric No
                <input type="text" name="matric_no" class="p-2 border-gray-200 border-2 rounded-md w-full" required>
            </div>
            <div class="flex flex-col gap-2 my-4">
                Password
                <input type="password" name="password" class="p-2 border-gray-200 rounded-md border-2 w-full" required>
            </div>
            <button type="submit" class="bg-[#00DDC0] p-2 w-full rounded-md cursor-pointer">Log in</button>
            </form>
        </div>

    </section>


</body>
</html>