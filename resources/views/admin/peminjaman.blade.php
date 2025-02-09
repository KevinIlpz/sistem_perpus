@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold text-gray-200">Daftar Peminjaman Buku</h2>
            <button onclick="window.location.href='{{ route('admin.create-peminjaman') }}'"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                + Tambah Peminjaman
            </button>
        </div>
        <div class="bg-gray-700 shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Siswa
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Buku
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Tanggal Pinjam
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-center text-xs font-semibold uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamen as $peminjaman)
                    <tr class="hover:bg-gray-600 transition duration-200 ease-in-out">
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <p class="text-white font-semibold">{{ $peminjaman->siswa->nama }}</p>
                                    <p class="text-gray-300 text-sm">{{ $peminjaman->siswa->nis }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16">
                                    <img class="w-full h-full rounded-lg object-cover"
                                         src="{{ asset('storage/' . $peminjaman->buku->gambar) }}"
                                         alt="{{ $peminjaman->buku->judul }}">
                                </div>
                                <div class="ml-3">
                                    <p class="text-white">{{ $peminjaman->buku->judul }}</p>
                                    <p class="text-gray-300 text-sm">{{ $peminjaman->buku->penulis }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white">
                                {{ \Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->format('d M Y') }}
                            </p>
                            <p class="text-gray-300 text-sm">
                                Estimasi: {{ \Carbon\Carbon::parse($peminjaman->estimasi_kembali)->format('d M Y') }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            @php
                                $statusColors = [
                                    'dipinjam' => 'bg-yellow-500',
                                    'dikembalikan' => 'bg-green-500',
                                    'terlambat' => 'bg-red-500'
                                ];
                            @endphp
                            <span class="{{ $statusColors[$peminjaman->status] }} text-white px-3 py-1 rounded-full text-xs">
                                {{ ucfirst($peminjaman->status) }}
                            </span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm text-center">
                            <div class="flex justify-center space-x-2">
                                @if ($peminjaman->status !== 'dikembalikan')
                                    <a href="{{ route('admin.edit-peminjaman', $peminjaman->id) }}"
                                       class="text-blue-400 hover:text-blue-600 transition duration-300">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @endif
                                <form action="{{ route('admin.delete-peminjaman', $peminjaman->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-400 hover:text-red-600 transition duration-300"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
