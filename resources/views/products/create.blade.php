@extends('layouts.main')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <x-flowbite.input label="Nama Produk" name="name" />
        <x-flowbite.input label="Harga" name="price" type="number" />
        <x-flowbite.textarea label="Deskripsi" name="description" />
        <x-flowbite.input label="Gambar" name="image" type="file" />
        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
    </form>
@endsection
