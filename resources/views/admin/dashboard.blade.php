@extends('layouts.main')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Dashboard Admin</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="p-4 bg-white rounded shadow text-center">
            <h3 class="text-xl font-bold">Total Produk</h3>
            <p class="text-2xl text-blue-600">{{ $totalProducts }}</p>
        </div>
        <div class="p-4 bg-white rounded shadow text-center">
            <h3 class="text-xl font-bold">Pengguna</h3>
            <p class="text-2xl text-green-600">{{ $totalUsers }}</p>
        </div>
        <div class="p-4 bg-white rounded shadow text-center">
            <h3 class="text-xl font-bold">Transaksi</h3>
            <p class="text-2xl text-red-600">{{ $totalOrders }}</p>
        </div>
    </div>

    <div class="bg-white rounded shadow p-4">
        <h4 class="text-lg font-bold mb-2">Produk Terbaru</h4>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Harga</th>
                    <th scope="col" class="px-6 py-3">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestProducts as $product)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">{{ $product->name }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">{{ $product->created_at->format('d-m-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
