@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Edit Profil</h2>

        <!-- Form for updating profil -->
        <form action="{{ route('admin.update-profil', $profil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <!-- Error Handling -->
            @if($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-lg">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Upload Gambar Baru -->
            <div class="space-y-2">
                <label for="gambar" class="block text-gray-300 font-semibold">Upload Gambar</label>
                <input type="file" id="gambar" name="gambar" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500">
                <div class="mt-2">
                    <p class="text-sm text-gray-600">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $profil->gambar)}}" alt="{{ $profil->judul_profil }}" class="w-32 h-24 mt-2 rounded-lg">
                    <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
                </div>
            </div>

            <!-- Input Judul Profil -->
            <div class="space-y-2">
                <label for="judul_profil" class="block text-gray-300 font-semibold">Judul Profil*</label>
                <input type="text" id="judul_profil" name="judul_profil" value="{{ old('judul_profil', $profil->judul_profil) }}" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan judul profil" required>
            </div>

            <!-- Input Isi Profil -->
            <div class="space-y-2">
                <label for="isi_profil" class="block text-gray-300 font-semibold">Isi Profil*</label>
                <textarea id="isi_profil" name="isi_profil" rows="5" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan isi profil" required>{{ old('isi_profil', $profil->isi_profil) }}</textarea>
            </div>

            <!-- Select Status -->
            <div class="space-y-2">
                <label for="status" class="block text-gray-300 font-semibold">Status*</label>
                <select name="status" id="status" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    <option value="aktif" {{ old('status', $profil->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="tidak-aktif" {{ old('status', $profil->status) == 'tidak-aktif' ? 'selected' : '' }}>Non Aktif</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-left">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
