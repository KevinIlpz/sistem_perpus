@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="bg-gray-800 rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-semibold text-gray-200 mb-6 text-center">Tambah Peminjaman Baru</h2>

            <form action="{{ route('admin.store-peminjaman') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Siswa Selection -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Pilih Siswa</label>
                        <select name="siswa_id" id="siswaSelect"
                                class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            <option value="">-- Pilih Siswa --</option>
                            @foreach($siswas as $siswa)
                                <option value="{{ $siswa->id }}">
                                    {{ $siswa->nama }} (NIS: {{ $siswa->nis }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Buku Selection -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Pilih Buku</label>
                        <select name="buku_id" id="bukuSelect"
                                class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            <option value="">-- Pilih Buku --</option>
                            @foreach($bukus as $buku)
                                <option value="{{ $buku->id }}" data-stok="{{ $buku->stok }}">
                                    {{ $buku->judul }} (Stok: {{ $buku->stok }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Dates -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Tanggal Pinjam</label>
                        <input type="date"
                               name="tanggal_pinjam"
                               value="{{ old('tanggal_pinjam', now()->format('Y-m-d')) }}"
                               class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Estimasi Kembali</label>
                        <input type="date"
                               name="estimasi_kembali"
                               value="{{ old('estimasi_kembali', now()->addWeek()->format('Y-m-d')) }}"
                               class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               required>
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                    Simpan Peminjaman
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Script untuk Select2 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Select2 untuk Siswa
        $('#siswaSelect').select2({
            placeholder: 'Cari siswa...',
            allowClear: true,
            width: '100%',
            theme: 'dark', // Sesuaikan tema dengan desain Anda
        });

        // Inisialisasi Select2 untuk Buku
        $('#bukuSelect').select2({
            placeholder: 'Cari buku...',
            allowClear: true,
            width: '100%',
            theme: 'dark', // Sesuaikan tema dengan desain Anda
        });
    });
</script>

<!-- Style untuk Select2 (Opsional) -->
<style>
    .select2-container--default .select2-selection--single {
        background-color: #374151;
        border: 1px solid #4b5563;
        border-radius: 0.5rem;
        height: 48px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #000000;
        line-height: 48px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 48px;
    }

    .select2-dropdown {
        background-color: #374151;
        border: 1px solid #4b5563;
    }

    .select2-results__option {
        color: #d1d5db;
    }

    .select2-results__option--highlighted {
        background-color: #4b5563;
    }

    .select2-search__field {
        color: #000000 !important;
    }
</style>

@endsection
