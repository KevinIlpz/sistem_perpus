@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl">
        <div class="bg-gray-800 rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-semibold text-gray-200 mb-6 text-center">Edit Data Peminjaman</h2>

            <form action="{{ route('admin.update-peminjaman', $peminjaman->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Siswa & Buku Selection -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Siswa Selection -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Siswa</label>
                        <select name="siswa_id"
                                class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            @foreach($siswas as $siswa)
                                <option value="{{ $siswa->id }}" {{ $peminjaman->siswa_id == $siswa->id ? 'selected' : '' }}>
                                    {{ $siswa->nama }} (NIS: {{ $siswa->nis }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Buku Selection -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Buku</label>
                        <select name="buku_id"
                                class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            @foreach($bukus as $buku)
                                <option value="{{ $buku->id }}" {{ $peminjaman->buku_id == $buku->id ? 'selected' : '' }}>
                                    {{ $buku->judul }} (Stok: {{ $buku->stok }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Estimasi Kembali & Status (Tanpa Tanggal Pinjam) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Estimasi Kembali -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Estimasi Kembali</label>
                        <input type="date"
                               name="estimasi_kembali"
                               value="{{ old('estimasi_kembali', $peminjaman->estimasi_kembali->format('Y-m-d')) }}"
                               class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               required>
                    </div>

                    <!-- Status -->
                    <div class="mb-4">
                        <label class="block text-gray-400 mb-2">Status</label>
                        <select name="status"
                                class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                            <option value="dikembalikan" {{ $peminjaman->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                            <option value="terlambat" {{ $peminjaman->status == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                        </select>
                    </div>
                </div>

                <!-- Conditional Tanggal Kembali Field (Shown only when Status is "dikembalikan") -->
                <div class="mb-4" id="tanggal_kembali_div" style="display: none;">
                    <label class="block text-gray-400 mb-2">Tanggal Kembali</label>
                    <input type="date"
                           name="tanggal_kembali"
                           value="{{ old('tanggal_kembali', isset($peminjaman->tanggal_kembali) ? $peminjaman->tanggal_kembali->format('Y-m-d') : '') }}"
                           class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                    Update Peminjaman
                </button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript to toggle Tanggal Kembali field -->
<script>
document.addEventListener('DOMContentLoaded', function () {
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
    toggleTanggalKembali(); // Check on page load
});
</script>
@endsection
