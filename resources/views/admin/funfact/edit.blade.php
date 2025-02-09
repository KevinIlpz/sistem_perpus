@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Edit Data Fun Fact</h2>

        <form action="{{ route('admin.update-funfact', $funfact->id) }}" method="POST" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
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

            <!-- Siswa Interaktif -->
            <div class="space-y-2">
                <label for="siswa_teraktif" class="block text-gray-300 font-semibold">Siswa Interaktif*</label>
                <input type="text" id="siswa_teraktif" name="siswa_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama siswa interaktif" required value="{{ old('siswa_teraktif', $funfact->siswa_teraktif) }}">
            </div>

            <!-- Rayon Interaktif -->
            <div class="space-y-2">
                <label for="rayon_teraktif" class="block text-gray-300 font-semibold">Rayon Interaktif*</label>
                <input type="text" id="rayon_teraktif" name="rayon_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan rayon interaktif" required value="{{ old('rayon_teraktif', $funfact->rayon_teraktif) }}">
            </div>

            <!-- Rombel Interaktif -->
            <div class="space-y-2">
                <label for="rombel_teraktif" class="block text-gray-300 font-semibold">Rombel Interaktif*</label>
                <input type="text" id="rombel_teraktif" name="rombel_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan rombel interaktif" required value="{{ old('rombel_teraktif', $funfact->rombel_teraktif) }}">
            </div>

            <!-- Buku Terfavorit -->
            <div class="space-y-2">
                <label for="buku_terfavorit" class="block text-gray-300 font-semibold">Buku Terfavorit*</label>
                <input type="text" id="buku_terfavorit" name="buku_terfavorit"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan buku terfavorit" required value="{{ old('buku_terfavorit', $funfact->buku_terfavorit) }}">
            </div>

            <!-- Submit Button -->
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
