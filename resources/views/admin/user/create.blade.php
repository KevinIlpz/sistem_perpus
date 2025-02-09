@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Tambah User</h2>

        <form action="{{ route('admin.store-user') }}" method="POST" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf

            <!-- Username -->
            <div class="space-y-2">
                <label for="username" class="block text-gray-300 font-semibold">Username*</label>
                <input type="text" id="username" name="username"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan username" required>
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <label for="password" class="block text-gray-300 font-semibold">Password*</label>
                <input type="password" id="password" name="password"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan password" required>
            </div>

            <!-- Submit Button -->
            <div class="text-left">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
    