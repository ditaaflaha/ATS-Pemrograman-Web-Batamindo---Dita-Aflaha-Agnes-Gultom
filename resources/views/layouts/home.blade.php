@extends('layouts.main')

@section('content')
    <!-- Carousel Start -->
    <div id="default-carousel" class="relative w-full mb-6" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('images/jamtangan1-banner.jpeg') }}"
                     class="block w-full h-full object-cover" alt="Banner Jam">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/jamtangan2-banner.jpg') }}"
                     class="block w-full h-full object-cover" alt="Banner 2">
            </div>
        </div>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- Produk Unggulan -->
    <h2 class="text-2xl font-bold mb-4">Produk Unggulan</h2>
    <div class="flex overflow-x-auto space-x-6 pb-4">
        @php
            $produk = [
                ['img' => 'jam-tangan1.jpg', 'judul' => 'Jam Tangan Sport', 'desc' => 'Cocok untuk aktivitas luar ruangan.'],
                ['img' => 'jam-tangan2.jpg', 'judul' => 'Jam Tangan Digital', 'desc' => 'Modern dan stylish untuk remaja.'],
                ['img' => 'jamtanganpromo.jpg', 'judul' => 'Promo Spesial', 'desc' => 'Diskon hingga 50% selama bulan ini!'],
                ['img' => 'jam-tangan-wanita.jpg', 'judul' => 'Jam Tangan Wanita', 'desc' => 'Anggun dan feminin, cocok untuk wanita aktif.'],
            ];
        @endphp
        @foreach ($produk as $item)
        <div class="flex-shrink-0 w-64 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#"><img class="rounded-t-lg w-full object-cover h-48" src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['judul'] }}" /></a>
            <div class="p-5">
                <h5 class="mb-2 text-xl font-bold text-gray-900">{{ $item['judul'] }}</h5>
                <p class="mb-3 text-gray-700">{{ $item['desc'] }}</p>
                <a href="/products" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">Lihat Detail</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
