@extends('layouts.main')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Semua Produk</h1>
    <p>Daftar lengkap jam tangan yang tersedia di toko kami.</p>

    <ul class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
        <li><a href="/products/1" class="text-blue-600 hover:underline">Jam Tangan Sport</a></li>
        <li><a href="/products/2" class="text-blue-600 hover:underline">Jam Tangan Digital</a></li>
        <li><a href="/products/3" class="text-blue-600 hover:underline">Jam Tangan Wanita</a></li>
    </ul>
@endsection
