@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Tambah Profil Baru
            </h2>

            <form action="{{ route('admin.store-profil') }}" method="POST" enctype="multipart/form-data" 
                  class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf

                <!-- Judul Profil -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="judul_profil" class="block text-sm font-medium text-gray-400 mb-2">Judul Profil</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-blue-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </div>
                            <input type="text" id="judul_profil" name="judul_profil" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan judul profil">
                        </div>
                    </div>
                </div>

                <!-- Isi Profil -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="isi_profil" class="block text-sm font-medium text-gray-400 mb-2">Konten Profil</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-purple-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                </svg>
                            </div>
                            <textarea id="isi_profil" name="isi_profil" rows="5" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 placeholder-gray-500 transition-all duration-300 hover:bg-gray-900/70"
                                   placeholder="Masukkan konten profil"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label for="status" class="block text-sm font-medium text-gray-400 mb-2">Status</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <select name="status" id="status" required
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70">
                                <option value="aktif">Aktif</option>
                                <option value="tidak-aktif">Non Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- File Upload -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Gambar</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-yellow-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col items-center justify-center w-full border-2 border-dashed border-gray-600 hover:border-yellow-400/50 rounded-2xl cursor-pointer transition-all duration-300 hover:bg-gray-900/20 relative overflow-hidden">
                                    <div id="filePreviewContainer" class="w-full p-4 flex items-center justify-center">
                                        <img id="filePreview" class="hidden max-h-32 max-w-full object-contain rounded-xl shadow-lg" alt="File preview">
                                        <div id="docPreview" class="hidden flex-col items-center text-yellow-400">
                                            <svg class="w-16 h-16 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            <span id="fileName" class="text-sm"></span>
                                        </div>
                                        <div id="fileUploadPrompt" class="text-center p-4">
                                            <p class="text-sm text-gray-400">
                                                <span class="font-semibold">Klik atau tarik file</span><br>
                                                JPG, PNG, PDF, DOC (Maks. 10MB)
                                            </p>
                                        </div>
                                    </div>
                                    <input type="file" id="gambar" name="gambar" 
                                           class="absolute inset-0 opacity-0 cursor-pointer"
                                           accept="image/*, .pdf, .doc, .docx" required onchange="previewFile(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-center">
                    <button type="submit" 
                            class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-bold text-white tracking-wide transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20 active:scale-95 flex items-center space-x-2">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Simpan Profil</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
function previewFile(event) {
    const input = event.target;
    const previewContainer = document.getElementById('filePreviewContainer');
    const filePreview = document.getElementById('filePreview');
    const docPreview = document.getElementById('docPreview');
    const fileName = document.getElementById('fileName');
    const uploadPrompt = document.getElementById('fileUploadPrompt');

    if (input.files && input.files[0]) {
        const file = input.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            if (file.type.startsWith('image/')) {
                filePreview.src = e.target.result;
                filePreview.classList.remove('hidden');
                docPreview.classList.add('hidden');
            } else {
                filePreview.classList.add('hidden');
                docPreview.classList.remove('hidden');
                fileName.textContent = file.name;
                
                // Set document type icon
                const docIcon = docPreview.querySelector('svg');
                if (file.type === 'application/pdf') {
                    docIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>';
                } else if (file.type.includes('document')) {
                    docIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>';
                }
            }
            uploadPrompt.classList.add('hidden');
        };

        reader.readAsDataURL(file);
    }
}
</script>