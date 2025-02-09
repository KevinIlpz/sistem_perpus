@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Buku
            </h2>

            <form action="{{ route('admin.update-buku', $book->id) }}" method="POST" enctype="multipart/form-data" 
                  class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf
                @method('PUT')

                <!-- Book Title -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="judul" class="block text-sm font-medium text-gray-400 mb-2">Judul Buku</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-blue-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <input type="text" id="judul" name="judul" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan judul buku"
                                   value="{{ old('judul', $book->judul) }}">
                        </div>
                    </div>
                </div>

                <!-- Author -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="penulis" class="block text-sm font-medium text-gray-400 mb-2">Penulis</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-purple-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input type="text" id="penulis" name="penulis" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan nama penulis"
                                   value="{{ old('penulis', $book->penulis) }}">
                        </div>
                    </div>
                </div>

                <!-- Publisher -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="penerbit" class="block text-sm font-medium text-gray-400 mb-2">Penerbit</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <input type="text" id="penerbit" name="penerbit" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan nama penerbit"
                                   value="{{ old('penerbit', $book->penerbit) }}">
                        </div>
                    </div>
                </div>

                <!-- Publication Year -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="tahun_terbit" class="block text-sm font-medium text-gray-400 mb-2">Tahun Terbit</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-yellow-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input type="number" id="tahun_terbit" name="tahun_terbit" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan tahun terbit"
                                   value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
                        </div>
                    </div>
                </div>

                <!-- ISBN -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-red-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="isbn" class="block text-sm font-medium text-gray-400 mb-2">ISBN</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-pink-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <input type="text" id="isbn" name="isbn" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan ISBN"
                                   value="{{ old('isbn', $book->isbn) }}">
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-600 hover:border-cyan-400/50 rounded-2xl cursor-pointer transition-all duration-300 hover:bg-gray-900/20 relative overflow-hidden">
                            <!-- Preview Container -->
                            <div id="previewContainer" class="w-full h-full flex items-center justify-center">
                                @if($book->gambar)
                                    <img src="{{ asset('storage/' . $book->gambar) }}" id="imagePreview" class="max-h-full max-w-full object-contain rounded-xl shadow-lg" alt="Current cover">
                                @else
                                    <img id="imagePreview" class="hidden max-h-full max-w-full object-contain rounded-xl shadow-lg" alt="Cover preview">
                                @endif
                            </div>
                            <!-- Upload Prompt -->
                            <div id="uploadPrompt" class="absolute inset-0 flex flex-col items-center justify-center {{ $book->gambar ? 'hidden' : '' }}">
                                <svg class="w-8 h-8 text-cyan-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-400 text-center">
                                    <span class="font-semibold">Click to upload</span><br>
                                    PNG, JPG, GIF (MAX. 2MB)
                                </p>
                            </div>
                            <input type="file" id="gambar" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*" onchange="previewImage(event)">
                        </label>
                        @if($book->gambar)
                            <div class="mt-2 text-center">
                                <button type="button" onclick="removeImage()" class="text-sm text-red-400 hover:text-red-300 transition-colors">
                                    Remove Current Image
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-center">
                    <button type="submit" 
                            class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-bold text-white tracking-wide transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 active:scale-95 flex items-center space-x-2">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Update Buku</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
function previewImage(event) {
    const input = event.target;
    const imagePreview = document.getElementById('imagePreview');
    const uploadPrompt = document.getElementById('uploadPreview');
    const previewContainer = document.getElementById('previewContainer');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
            uploadPrompt.classList.add('hidden');
            
            // Create new image element if not exists
            if (!document.getElementById('imagePreview')) {
                const newImg = document.createElement('img');
                newImg.id = 'imagePreview';
                newImg.classList.add('max-h-full', 'max-w-full', 'object-contain', 'rounded-xl', 'shadow-lg');
                newImg.alt = 'Cover preview';
                previewContainer.appendChild(newImg);
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

function removeImage() {
    const input = document.getElementById('gambar');
    const imagePreview = document.getElementById('imagePreview');
    const uploadPrompt = document.getElementById('uploadPrompt');
    
    input.value = ''; // Clear file input
    imagePreview.src = '';
    imagePreview.classList.add('hidden');
    uploadPrompt.classList.remove('hidden');
    
    // Add hidden input to notify server to remove image
    const form = document.querySelector('form');
    const hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'remove_image';
    hiddenInput.value = '1';
    form.appendChild(hiddenInput);
}
</script>