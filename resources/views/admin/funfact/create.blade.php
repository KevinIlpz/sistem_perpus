@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Add Fun Fact</h2>

        <form action="{{ route('admin.store-funfact') }}" method="POST" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf

            <!-- Siswa Teraktif -->
            <div class="space-y-2">
                <label for="siswa_teraktif" class="block text-gray-300 font-semibold">Siswa Teraktif*</label>
                <input type="text" id="siswa_teraktif" name="siswa_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama siswa teraktif" required>
            </div>

            <!-- Rayon Teraktif -->
            <div class="space-y-2">
                <label for="rayon_teraktif" class="block text-gray-300 font-semibold">Rayon Teraktif*</label>
                <input type="text" id="rayon_teraktif" name="rayon_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan rayon teraktif" required>
            </div>

            <!-- Rombel Teraktif -->
            <div class="space-y-2">
                <label for="rombel_teraktif" class="block text-gray-300 font-semibold">Rombel Teraktif*</label>
                <input type="text" id="rombel_teraktif" name="rombel_teraktif"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan rombel teraktif" required>
            </div>

            <!-- Buku Terfavorit -->
            <div class="space-y-2">
                <label for="buku_terfavorit" class="block text-gray-300 font-semibold">Buku Terfavorit*</label>
                <input type="text" id="buku_terfavorit" name="buku_terfavorit"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan buku terfavorit" required>
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
