@extends('layouts.template')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <div class="mb-4">
        <h1 class="text-3xl font-bold text-gray-800">{{ $blog->judul }}</h1>
        <p class="text-gray-600">Diposting pada {{ $blog->created_at->format('d M Y') }}</p>
    </div>

    @if ($blog->image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->judul }}" class="w-full max-h-90 object-cover rounded-lg"> <!-- Gambar tidak lebih tinggi dari 80 -->
        </div>
    @endif

    <div class="mb-4">
        <p class="text-gray-700 leading-relaxed">{{ $blog->isi }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('blog') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Kembali ke Blog</a>
    </div>
</div>
@endsection
