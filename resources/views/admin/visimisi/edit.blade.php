@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Edit Visi, Misi, and Moto</h2>

        <!-- Form for updating Visi, Misi, and Moto -->
        <form action="{{ route('admin.update-visimisi', $visimisi->id) }}" method="POST" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
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
            <div class="space-y-2">
                <label for="visi" class="block text-gray-300 font-semibold">Visi*</label>
                <textarea id="visi" name="visi" rows="4" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter vision" required>{{ old('visi', $visimisi->visi) }}</textarea>
            </div>

            <!-- Input Misi -->
            <div class="space-y-2">
                <label for="misi" class="block text-gray-300 font-semibold">Misi*</label>
                <textarea id="misi" name="misi" rows="4" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter mission" required>{{ old('misi', $visimisi->misi) }}</textarea>
            </div>

            <!-- Input Moto -->
            <div class="space-y-2">
                <label for="motto" class="block text-gray-300 font-semibold">Moto*</label>
                <textarea id="motto" name="motto" rows="4" class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter motto" required>{{ old('motto', $visimisi->motto) }}</textarea>
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
