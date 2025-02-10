@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-4xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Blog
            </h2>

            <form action="{{ route('admin.update-blog', $blog->id) }}" method="POST" enctype="multipart/form-data" 
                  class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf
                @method('PUT')

                <!-- Judul Blog -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="judul" class="block text-sm font-medium text-gray-400 mb-2">Judul Blog</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-blue-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <input type="text" id="judul" name="judul" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan judul blog"
                                   value="{{ old('judul', $blog->judul) }}">
                        </div>
                    </div>
                </div>

                <!-- Isi Blog -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="isi" class="block text-sm font-medium text-gray-400 mb-2">Konten Blog</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-purple-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <textarea id="isi" name="isi" rows="8" required
                                      class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                      placeholder="Tulis konten blog di sini...">{{ old('isi', $blog->isi) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Gambar Upload -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-600 hover:border-cyan-400/50 rounded-2xl cursor-pointer transition-all duration-300 hover:bg-gray-900/20 relative overflow-hidden">
                            <!-- Preview Container -->
                            <div id="blogPreviewContainer" class="w-full h-full flex items-center justify-center">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" id="blogImagePreview" class="max-h-full max-w-full object-cover rounded-xl shadow-lg" alt="Current blog image">
                                @else
                                    <img id="blogImagePreview" class="hidden max-h-full max-w-full object-cover rounded-xl shadow-lg" alt="Blog preview">
                                @endif
                            </div>
                            <!-- Upload Prompt -->
                            <div id="blogUploadPrompt" class="absolute inset-0 flex flex-col items-center justify-center {{ $blog->image ? 'hidden' : '' }}">
                                <svg class="w-8 h-8 text-cyan-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-400 text-center">
                                    <span class="font-semibold">Klik untuk upload</span><br>
                                    JPG, PNG, GIF (Maks. 10MB)
                                </p>
                            </div>
                            <input type="file" id="gambar" name="image" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*" onchange="previewBlogImage(event)">
                        </label>
                        @if($blog->image)
                            <div class="mt-2 text-center">
                                <button type="button" onclick="removeBlogImage()" class="text-sm text-red-400 hover:text-red-300 transition-colors">
                                    Hapus Gambar Saat Ini
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Status -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="status" class="block text-sm font-medium text-gray-400 mb-2">Status</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-yellow-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <select id="status" name="status" required
                                    class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70">
                                <option value="aktif" {{ $blog->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak aktif" {{ $blog->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
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
                        <span>Perbarui Blog</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
function previewBlogImage(event) {
    const input = event.target;
    const imagePreview = document.getElementById('blogImagePreview');
    const uploadPrompt = document.getElementById('blogUploadPrompt');
    const previewContainer = document.getElementById('blogPreviewContainer');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
            uploadPrompt.classList.add('hidden');
            
            if (!document.getElementById('blogImagePreview')) {
                const newImg = document.createElement('img');
                newImg.id = 'blogImagePreview';
                newImg.classList.add('max-h-full', 'max-w-full', 'object-cover', 'rounded-xl', 'shadow-lg');
                newImg.alt = 'Blog preview';
                previewContainer.appendChild(newImg);
            }
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

function removeBlogImage() {
    const input = document.getElementById('gambar');
    const imagePreview = document.getElementById('blogImagePreview');
    const uploadPrompt = document.getElementById('blogUploadPrompt');
    
    input.value = '';
    imagePreview.src = '';
    imagePreview.classList.add('hidden');
    uploadPrompt.classList.remove('hidden');
    
    const form = document.querySelector('form');
    const hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'remove_image';
    hiddenInput.value = '1';
    form.appendChild(hiddenInput);
}
</script>