@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Edit Buku Tamu</h2>

        <form action="{{ route('admin.update-bukutamu', $bukutamu->id)}}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <!-- Tanggal -->
            <div class="space-y-2">
                <label for="tanggal" class="block text-gray-300 font-semibold">Tanggal*</label>
                <input type="date" id="tanggal" name="tanggal"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    value="{{ $bukutamu->tanggal }}" required>
            </div>

            <!-- Nama -->
            <div class="space-y-2">
                <label for="nama" class="block text-gray-300 font-semibold">Nama*</label>
                <input type="text" id="nama" name="nama"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama Anda" value="{{ $bukutamu->name }}" required>
            </div>

            <!-- Email -->
            <div class="space-y-2">
                <label for="email" class="block text-gray-300 font-semibold">Email*</label>
                <input type="email" id="email" name="email"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan email Anda" value="{{ $bukutamu->email }}" required>
            </div>

            <!-- Pesan -->
            <div class="space-y-2">
                <label for="pesan" class="block text-gray-300 font-semibold">Pesan*</label>
                <textarea id="pesan" name="pesan" rows="5"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Tulis pesan Anda di sini..." required>{{ old('pesan', $bukutamu->pesan) }}</textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="text-left">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
