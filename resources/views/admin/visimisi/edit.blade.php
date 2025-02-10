@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Visi, Misi, and Moto
            </h2>

            <form action="{{ route('admin.update-visimisi', $visimisi->id) }}" method="POST" class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
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

                <!-- Input Visi -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="visi" class="block text-sm font-medium text-gray-400 mb-2">Visi*</label>
                        <textarea id="visi" name="visi" rows="4" required
                                  class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                  placeholder="Enter vision">{{ old('visi', $visimisi->visi) }}</textarea>
                    </div>
                </div>

                <!-- Input Misi -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="misi" class="block text-sm font-medium text-gray-400 mb-2">Misi*</label>
                        <textarea id="misi" name="misi" rows="4" required
                                  class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                  placeholder="Enter mission">{{ old('misi', $visimisi->misi) }}</textarea>
                    </div>
                </div>

                <!-- Input Moto -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-red-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="motto" class="block text-sm font-medium text-gray-400 mb-2">Moto*</label>
                        <textarea id="motto" name="motto" rows="4" required
                                  class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                  placeholder="Enter motto">{{ old('motto', $visimisi->motto) }}</textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-center">
                    <button type="submit"
                            class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-bold text-white tracking-wide transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 active:scale-95 flex items-center space-x-2">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
