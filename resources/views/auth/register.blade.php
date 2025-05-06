@extends('layouts.main')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Daftar Akun</h2>
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <x-flowbite.input label="Nama" name="name" />
            <x-flowbite.input label="Email" name="email" type="email" />
            <x-flowbite.input label="Password" name="password" type="password" />
            <x-flowbite.input label="Konfirmasi Password" name="password_confirmation" type="password" />
            <button class="w-full px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Daftar</button>
        </form>
    </div>
@endsection
