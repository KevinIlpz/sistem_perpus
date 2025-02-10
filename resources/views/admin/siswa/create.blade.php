@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Tambah Siswa Baru
            </h2>

            <form action="{{ route('admin.store-siswa') }}" method="POST" class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf

                <!-- Nama -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="nama" class="block text-sm font-medium text-gray-400 mb-2">Nama Siswa</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-blue-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input type="text" id="nama" name="nama" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70">
                        </div>
                    </div>
                </div>

                <!-- NIS -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="nis" class="block text-sm font-medium text-gray-400 mb-2">NIS</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path>
                                </svg>
                            </div>
                            <input type="text" id="nis" name="nis" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70">
                        </div>
                    </div>
                </div>

                <!-- Rayon & Rombel Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Rayon -->
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                        <div class="relative">
                            <label for="rayon" class="block text-sm font-medium text-gray-400 mb-2">Rayon</label>
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0 text-yellow-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="rayon" name="rayon" required
                                       class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70">
                            </div>
                        </div>
                    </div>

                    <!-- Rombel -->
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-red-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                        <div class="relative">
                            <label for="rombel" class="block text-sm font-medium text-gray-400 mb-2">Rombel</label>
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0 text-pink-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="rombel" name="rombel" required
                                       class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70">
                            </div>
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
                        <span>Tambah Siswa</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection