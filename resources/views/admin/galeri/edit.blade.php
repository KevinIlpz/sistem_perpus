@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-4xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Data Galeri
            </h2>

            <form action="{{ route('admin.update-galeri', $galeri->id) }}" method="POST" enctype="multipart/form-data" 
                  class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
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
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-600 hover:border-cyan-400/50 rounded-2xl cursor-pointer transition-all duration-300 hover:bg-gray-900/20 relative overflow-hidden">
                            <!-- Preview Container -->
                            <div id="previewContainer" class="w-full h-full flex items-center justify-center">
                                @if($galeri->file)
                                    <img src="{{ asset('storage/' . $galeri->file) }}" id="imagePreview" class="max-h-full max-w-full object-contain rounded-xl shadow-lg" alt="Current image">
                                @else
                                    <img id="imagePreview" class="hidden max-h-full max-w-full object-contain rounded-xl shadow-lg" alt="Image preview">
                                @endif
                            </div>
                            <!-- Upload Prompt -->
                            <div id="uploadPrompt" class="absolute inset-0 flex flex-col items-center justify-center {{ $galeri->file ? 'hidden' : '' }}">
                                <svg class="w-8 h-8 text-cyan-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-400 text-center">
                                    <span class="font-semibold">Klik untuk upload</span><br>
                                    JPG, PNG (max: 10 MB)
                                </p>
                            </div>
                            <input type="file" id="gambar" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*" onchange="previewImage(event)">
                        </label>
                        @if($galeri->file)
                            <div class="mt-2 text-center">
                                <button type="button" onclick="removeImage()" class="text-sm text-red-400 hover:text-red-300 transition-colors">
                                    Hapus Gambar Saat Ini
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Kategori -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="kategori" class="block text-sm font-medium text-gray-400 mb-2">Kategori*</label>
                        <input type="text" id="kategori" name="kategori" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               placeholder="Masukkan kategori" value="{{ old('kategori', $galeri->kategori) }}">
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="keterangan" class="block text-sm font-medium text-gray-400 mb-2">Keterangan*</label>
                        <input type="text" id="keterangan" name="keterangan" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               placeholder="Masukkan keterangan" value="{{ old('keterangan', $galeri->keterangan) }}">
                    </div>
                </div>

                <!-- Oleh -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="oleh" class="block text-sm font-medium text-gray-400 mb-2">Oleh*</label>
                        <input type="text" id="oleh" name="oleh" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               placeholder="Nama penginput data" value="{{ old('oleh', $galeri->oleh) }}">
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="tanggal" class="block text-sm font-medium text-gray-400 mb-2">Tanggal*</label>
                        <input type="date" id="tanggal" name="tanggal" required
                               class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                               value="{{ old('tanggal', $galeri->tanggal) }}">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-center">
                    <button type="submit" 
                            class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-bold text-white tracking-wide transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 active:scale-95 flex items-center space-x-2">
                        <span>Perbarui Galeri</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const imagePreview = document.getElementById('imagePreview');
    const uploadPrompt = document.getElementById('uploadPrompt');
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
@endsection