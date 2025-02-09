@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Tambah Profil</h2>

        <form action="{{ route('admin.store-profil') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf

            <!-- Profile Title -->
            <div class="space-y-2">
                <label for="judul_profil" class="block text-gray-300 font-semibold">Judul Profil*</label>
                <input type="text" id="judul_profil" name="judul_profil"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan judul profil" required>
            </div>

            <!-- Profile Content -->
            <div class="space-y-2">
                <label for="isi_profil" class="block text-gray-300 font-semibold">Konten Profil*</label>
                <textarea id="isi_profil" name="isi_profil" rows="5"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan konten profil" required></textarea>
            </div>

            <!-- Status -->
            <div class="space-y-2">
                <label for="status" class="block text-gray-300 font-semibold">Status*</label>
                <select name="status" id="status"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500">
                    <option value="aktif">Aktif</option>
                    <option value="tidak-aktif">Non Aktif</option>
                </select>
            </div>

            <!-- Image -->
            <div class="space-y-2">
                <label for="gambar" class="block text-gray-300 font-semibold">Gambar*</label>
                <input type="file" id="gambar" name="gambar"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500">
                <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
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
