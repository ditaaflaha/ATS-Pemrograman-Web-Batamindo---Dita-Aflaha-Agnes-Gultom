<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="{{ asset('js/tailwindcss3.4.1.js') }}"></script>

    <style>
        body {
            font-family: 'Didact Gothic', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-yellow-200 via-yellow-100 to-yellow-50 min-h-screen font-sans text-gray-800">

    <!-- Navbar -->
    <header class="bg-navy shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="h-12">
            <nav class="space-x-6 text-lg font-semibold text-gray-700">
                <a href="{{ url('/home') }}" class="hover:text-blue-600">HOME</a>
                <a href="{{ url('/destinasi') }}" class="text-blue-600 underline">DESTINASI</a>
                <a href="{{ url('/promo') }}" class="hover:text-blue-600">PROMO</a>
            </nav>
            <a href="{{ url('/login') }}">
                <img src="{{ asset('images/user-circle-fill.png') }}" class="h-10">
            </a>
        </div>
    </header>

    <!-- Button Filter -->
    <div class="max-w-6xl mx-auto mt-10 mb-4 px-4">
        <div class="flex flex-wrap gap-3 justify-center">
            @foreach (['galang', 'nongsa', 'tanjung pinggir', 'tiban', 'sekupang', 'piayu', 'punggur'] as $area)
                <a href="{{ url('/' . $area) }}">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-full transition">{{ strtoupper($area) }}</button>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Card Swiper -->
    <div class="swiper mySwiper max-w-6xl mx-auto px-4">
        <div class="swiper-wrapper">
            @php
                $destinasi = [
                    ['img' => 'pnt1.jpg', 'title' => 'MIROTA', 'url' => '/des1'],
                    ['img' => 'pnt2.jpg', 'title' => 'CORNER', 'url' => '#'],
                    ['img' => 'pnt3.jpg', 'title' => 'MELUR', 'url' => '#'],
                    ['img' => 'pnt4.jpg', 'title' => 'MIROTA', 'url' => '#'],
                    ['img' => 'pnt5.jpg', 'title' => 'MIROTA', 'url' => '#'],
                    ['img' => 'pnt6.jpg', 'title' => 'MIROTA', 'url' => '#'],
                    ['img' => 'pnt7.jpg', 'title' => 'MIROTA', 'url' => '#'],
                ];
            @endphp

            @foreach ($destinasi as $item)
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition w-72">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-xl font-bold text-gray-800">{{ $item['title'] }}</p>
                            <a href="{{ $item['url'] }}">
                                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigasi Swiper -->
        <div class="swiper-button-next text-blue-600"></div>
        <div class="swiper-button-prev text-blue-600"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Inisialisasi Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

</body>
</html>
