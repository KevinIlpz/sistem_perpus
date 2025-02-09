@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold text-gray-200">Tambah Blog</h2>
        </div>

        <div class="bg-gray-700 shadow-md rounded-lg p-6">
            <form action="{{ route('admin.store-blog') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf <!-- Token CSRF untuk keamanan -->

                <!-- Judul Blog -->
                <div class="space-y-2">
                    <label for="judul" class="block text-gray-400 font-semibold">Judul Blog*</label>
                    <input type="text" id="judul" name="judul"
                        class="w-full p-2 border border-gray-500 rounded bg-gray-800 text-white focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan judul blog" required>
                </div>

                <!-- Isi Blog -->
                <div class="space-y-2">
                    <label for="isi" class="block text-gray-400 font-semibold">Isi Blog*</label>
                    <textarea id="isi" name="isi" rows="8"
                        class="w-full p-2 border border-gray-500 rounded bg-gray-800 text-white focus:outline-none focus:border-blue-500"
                        placeholder="Tulis konten blog di sini..." required></textarea>
                </div>

                <!-- Gambar -->
                <div class="space-y-2">
                    <label for="gambar" class="block text-gray-400 font-semibold">Upload Gambar</label>
                    <input type="file" id="gambar" name="image"
                        class="w-full p-2 border border-gray-500 rounded bg-gray-800 text-white focus:outline-none focus:border-blue-500"
                        accept="image/*">
                    <p class="text-sm text-gray-400">Format gambar: JPG, PNG, GIF (max: 10 MB)</p>
                </div>

                <!-- Status -->
                <div class="space-y-2">
                    <label for="status" class="block text-gray-400 font-semibold">Status*</label>
                    <select id="status" name="status"
                        class="w-full p-2 border border-gray-500 rounded bg-gray-800 text-white focus:outline-none focus:border-blue-500" required>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                    </select>
                </div>

                <!-- Tombol Submit -->
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
