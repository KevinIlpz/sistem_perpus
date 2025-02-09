@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Data Siswa
            </h2>

            <form action="{{ route('admin.update-siswa', $siswa->id) }}" method="POST" class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="nama" class="block text-sm font-medium text-gray-400 mb-2">Nama Siswa</label>
                        <input type="text" id="nama" name="nama" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               value="{{ old('nama', $siswa->nama) }}">
                    </div>
                </div>

                <!-- NIS -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="nis" class="block text-sm font-medium text-gray-400 mb-2">NIS</label>
                        <input type="text" id="nis" name="nis" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               value="{{ old('nis', $siswa->nis) }}">
                    </div>
                </div>

                <!-- Rayon & Rombel -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                        <div class="relative">
                            <label for="rayon" class="block text-sm font-medium text-gray-400 mb-2">Rayon</label>
                            <input type="text" id="rayon" name="rayon" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   value="{{ old('rayon', $siswa->rayon) }}">
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-red-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                        <div class="relative">
                            <label for="rombel" class="block text-sm font-medium text-gray-400 mb-2">Rombel</label>
                            <input type="text" id="rombel" name="rombel" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   value="{{ old('rombel', $siswa->rombel) }}">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-center">
                    <button type="submit"
                            class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-bold text-white tracking-wide transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 active:scale-95 flex items-center space-x-2">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Update Siswa</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
