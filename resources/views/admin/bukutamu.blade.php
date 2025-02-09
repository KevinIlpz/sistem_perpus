@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold text-gray-200">Daftar Bukutamu</h2>
            <button onclick="window.location.href='{{ route('admin.create-bukutamu') }}'" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
            + Tambah Bukutamu
            </button>
        </div>
        <div class="bg-gray-700 shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            No
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-center text-xs font-semibold uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-center text-xs font-semibold uppercase tracking-wider">
                            Pesan
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-center text-xs font-semibold uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukutamus as $bukutamu)
                    <tr class="hover:bg-gray-600 transition duration-200 ease-in-out">
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white whitespace-no-wrap">{{ $loop->iteration }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white whitespace-no-wrap">{{ $bukutamu->tanggal }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white whitespace-no-wrap">{{ $bukutamu->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm text-center">
                            <p class="text-white whitespace-no-wrap">{{ $bukutamu->email }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm text-center">
                            <p class="text-white whitespace-no-wrap">{{ $bukutamu->pesan }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('admin.edit-bukutamu', $bukutamu->id) }}" class="text-blue-400 hover:text-blue-600 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin mengedit data bukutamu ini?')">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="text-red-400 hover:text-red-600 transition duration-300" onclick="event.preventDefault(); confirmDelete({{ $bukutamu->id }})">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <form id="delete-form-{{ $bukutamu->id }}" action="{{ route('admin.delete-bukutamu', $bukutamu->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
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

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data bukutamu ini?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
@endsection
