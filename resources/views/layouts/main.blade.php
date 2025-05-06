<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Jam</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar Start --}}
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-600 shadow-sm">
        <div class="max-w-screen-xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="flex items-center space-x-3">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
                <span class="text-2xl font-semibold text-gray-900 dark:text-white">Toko Jam</span>
            </a>
            <button data-collapse-toggle="navbar" type="button" class="md:hidden inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <div class="hidden md:flex space-x-6 items-center" id="navbar">
                <a href="/" class="text-gray-700 hover:text-blue-600 dark:text-white dark:hover:text-blue-400">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 dark:text-white dark:hover:text-blue-400">About</a>
                <a href="/products" class="text-gray-700 hover:text-blue-600 dark:text-white dark:hover:text-blue-400">Products</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 dark:text-white dark:hover:text-blue-400">Contact</a>
                <a href="/login" class="text-gray-700 hover:text-blue-600 dark:text-white dark:hover:text-blue-400">Login</a>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}

    {{-- Main Content --}}
    <main class="max-w-screen-xl mx-auto py-10 px-4">
        @yield('content')
    </main>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
</html>
