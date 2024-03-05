<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The University of Zambia</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            overflow: hidden; /* Prevent scrolling */
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-green-900">

    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="https://www.unza.zm/themes/unza/logo.svg" class="text-xl font-bold"><img src="https://www.unza.zm/themes/unza/logo.svg" alt="University of Zambia Logo" class="h-8"></a>
            <nav>
                <ul class="flex space-x-6">
                    <!-- Add navigation links if needed -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content (Hero Section) -->
    <main class="flex items-center justify-center h-screen">
        <div class="text-center">
            <a href="https://www.unza.zm/themes/unza/logo.svg" class="text-xl font-bold"><img src="https://www.unza.zm/themes/unza/logo.svg" alt="University of Zambia Logo" class="block mx-auto h-40 mb-4"></a>
            <h1 class="text-4xl font-bold text-white mb-4 subpixel-antialiased hover:subpixel-antialiased">Welcome to The University of Zambia</h1>
            <p class="text-lg text-white">Security Services Department.</p>
        </div>
    </main>

    <!-- Security Services Section -->
    <div class="px-4">
        <h1 class="text-2xl font-bold text-gray-800">Security Services Center</h1>
        <p class="text-sm text-gray-100">How can we help you?</p>
        <p class="text-sm text-gray-100">"Guardians of Safety: Protecting Every Step. The Security Department at our campus is dedicated to ensuring the safety and security of every student and member of staff. With unwavering vigilance and a commitment to excellence, we stand as the steadfast protectors of our campus community, fostering an environment where everyone can thrive without fear."</p>
    </div>

    <!-- Login/Register Section -->
    <div class="fixed top-0 right-0 p-6 text-right z-10">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-green-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-white hover:text-green-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-green-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <!-- Footer -->
    <footer class="footer bg-gray-800 text-white py-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 The University of Zambia. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
