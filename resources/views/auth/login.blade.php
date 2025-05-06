@extends('layouts.main')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Login</h1>
    <form class="max-w-md space-y-4">
        <input type="email" placeholder="Email" class="w-full p-2 border rounded" />
        <input type="password" placeholder="Password" class="w-full p-2 border rounded" />
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Login</button>
    </form>
@endsection
