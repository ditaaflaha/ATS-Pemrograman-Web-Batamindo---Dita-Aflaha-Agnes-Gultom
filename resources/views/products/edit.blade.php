@extends('layouts.main')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <x-flowbite.input label="Nama Produk" name="name" value="{{ $product->name }}" />
        <x-flowbite.input label="Harga" name="price" type="number" value="{{ $product->price }}" />
        <x-flowbite.textarea label="Deskripsi" name="description">{{ $product->description }}</x-flowbite.textarea>
        <x-flowbite.input label="Gambar" name="image" type="file" />
        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
    </form>
@endsection
