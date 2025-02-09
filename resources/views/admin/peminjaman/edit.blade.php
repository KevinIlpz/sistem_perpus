@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="animate-fade-in-up transition-all duration-500 ease-out">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-8 text-center tracking-tight">
                Edit Data Peminjaman
            </h2>
            <form action="{{ route('admin.update-peminjaman', $peminjaman->id) }}" method="POST"
                  class="space-y-8 bg-gray-800/50 backdrop-blur-lg p-10 rounded-3xl border border-gray-700/70 shadow-2xl shadow-blue-500/10">
                @csrf
                @method('PUT')

                <!-- Form Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left Column: Siswa & Buku -->
                    <div class="space-y-8">
                        <!-- Siswa Selection -->
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                            <div class="relative">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Nama Siswa</label>
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0 text-blue-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <select name="siswa_id" id="siswaSelect"
                                            class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70"
                                            required>
                                        <option disabled hidden>Pilih Siswa</option>
                                        @foreach($siswas as $siswa)
                                            <option value="{{ $siswa->id }}" {{ $peminjaman->siswa_id == $siswa->id ? 'selected' : '' }}>
                                                {{ $siswa->nama }} (NIS: {{ $siswa->nis }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Buku Selection -->
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                            <div class="relative">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Nama Buku</label>
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0 text-purple-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <select name="buku_id" id="bukuSelect"
                                            class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70"
                                            required>
                                        <option disabled hidden>Pilih Buku</option>
                                        @foreach($bukus as $buku)
                                            <option value="{{ $buku->id }}" {{ $peminjaman->buku_id == $buku->id ? 'selected' : '' }} data-stok="{{ $buku->stok }}">
                                                {{ $buku->judul }} (Stok: {{ $buku->stok }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Estimasi Kembali & Status -->
                    <div class="space-y-8">
                        <!-- Estimasi Kembali -->
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-cyan-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                            <div class="relative">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Estimasi Kembali</label>
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0 text-green-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <input type="date" name="estimasi_kembali"
                                           value="{{ old('estimasi_kembali', $peminjaman->estimasi_kembali->format('Y-m-d')) }}"
                                           class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70"
                                           required>
                                </div>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                            <div class="relative">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Status</label>
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0 text-yellow-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <select name="status"
                                            class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70"
                                            required>
                                        <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                                        <option value="dikembalikan" {{ $peminjaman->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                                        <option value="terlambat" {{ $peminjaman->status == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conditional Tanggal Kembali (hanya muncul saat status = "dikembalikan") -->
                <div class="relative group" id="tanggal_kembali_div" style="display: none;">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-red-600 to-pink-600 rounded-lg blur opacity-20 group-hover:opacity-30 transition duration-1000"></div>
                    <div class="relative">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Tanggal Kembali</label>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 text-red-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input type="date" name="tanggal_kembali"
                                   value="{{ old('tanggal_kembali', isset($peminjaman->tanggal_kembali) ? $peminjaman->tanggal_kembali->format('Y-m-d') : '') }}"
                                   class="w-full p-3 bg-gray-900/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 text-gray-300 transition-all duration-300 hover:bg-gray-900/70">
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
                        <span>Update Peminjaman</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript untuk menampilkan/menghilangkan field Tanggal Kembali -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const statusSelect = document.querySelector('select[name="status"]');
    const tanggalKembaliDiv = document.getElementById('tanggal_kembali_div');

    function toggleTanggalKembali() {
        if (statusSelect.value === 'dikembalikan') {
            tanggalKembaliDiv.style.display = 'block';
        } else {
            tanggalKembaliDiv.style.display = 'none';
        }
    }

    statusSelect.addEventListener('change', toggleTanggalKembali);
    toggleTanggalKembali();
});
</script>

<!-- Inisialisasi Select2 untuk custom select -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    $('#siswaSelect, #bukuSelect').select2({
        placeholder: 'Search...',
        allowClear: true,
        width: '100%',
        theme: 'dark',
        minimumResultsForSearch: Infinity,
        dropdownParent: $('.bg-gray-800\\/50')
    });
});
</script>

<style>
    .select2-container--dark .select2-selection--single {
        background-color: #1F2937 !important;
        border: 1px solid #374151 !important;
        border-radius: 0.75rem;
        height: 48px;
        padding: 0 12px;
    }
    .select2-container--dark .select2-selection__rendered {
        color: #E5E7EB !important;
        line-height: 48px !important;
    }
    .select2-container--dark .select2-selection__arrow {
        height: 48px !important;
        right: 10px !important;
    }
    .select2-dropdown--dark {
        background-color: #1F2937 !important;
        border: 1px solid #374151 !important;
        border-radius: 0.75rem !important;
    }
    .select2-results__option--dark {
        color: #E5E7EB !important;
        padding: 12px !important;
    }
    .select2-results__option--dark:hover {
        background-color: #374151 !important;
    }
</style>
@endsection
