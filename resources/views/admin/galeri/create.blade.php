@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Add Data</h2>

        <form action="{{ route('admin.store-galeri') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf

            <!-- Upload File -->
            <div class="space-y-2">
                <label for="file" class="block text-gray-300 font-semibold">Upload File*</label>
                <input type="file" id="file" name="file"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    accept="image/*, .pdf, .doc, .docx" required>
                <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
            </div>

            <!-- Kategori -->
            <div class="space-y-2">
                <label for="kategori" class="block text-gray-300 font-semibold">Kategori*</label>
                <input type="text" id="kategori" name="kategori"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan kategori" required>
            </div>

            <!-- Keterangan -->
            <div class="space-y-2">
                <label for="keterangan" class="block text-gray-300 font-semibold">Keterangan*</label>
                <input type="text" id="keterangan" name="keterangan"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan keterangan" required>
            </div>

            <!-- Oleh -->
            <div class="space-y-2">
                <label for="oleh" class="block text-gray-300 font-semibold">Oleh*</label>
                <input type="text" id="oleh" name="oleh"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Nama penginput data" required>
            </div>

            <!-- Tanggal -->
            <div class="space-y-2">
                <label for="tanggal" class="block text-gray-300 font-semibold">Tanggal*</label>
                <input type="date" id="tanggal" name="tanggal"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required>
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
