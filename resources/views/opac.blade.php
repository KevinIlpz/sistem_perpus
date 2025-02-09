@extends('layouts.template')

@section('content')
<div class="relative flex flex-col min-h-screen bg-[#fbf9f8] overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="layout-container flex flex-col flex-grow">
    <div class="px-8 md:px-16 lg:px-40 flex flex-1 justify-center py-10">
      <div class="layout-content-container flex flex-col max-w-3xl flex-1 space-y-8">
        
        <!-- Improved Search Section -->
        <div class="px-4 py-3">
          <form method="GET" action="#">
            <div class="relative">
              <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#96684f]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
              </span>
              <input
                type="text"
                name="search"
                placeholder="Search for an eBook"
                class="w-full pl-12 pr-4 py-3 rounded-lg bg-[#f3ebe8] text-[#1b130e] placeholder:text-[#96684f] border border-transparent focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 transition-colors duration-200 shadow-sm"
              />
            </div>
          </form>
        </div>
        
        <!-- Section Title -->
        <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5 animate__animated animate__fadeInDown">
          Daftar Buku
        </h2>
        
        <!-- Book Grid (3 columns on md and up) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
          @foreach($books as $book)
          <div class="group flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-2xl animate__animated animate__fadeInUp duration-300">
            <!-- Cover Image -->
            <div class="relative">
              <div class="w-full aspect-square bg-center bg-cover" style='background-image: url("{{ $book->gambar ? Storage::url($book->gambar) : asset("default-image.png") }}");'></div>
              <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
            </div>
            <!-- Book Details -->
            <div class="p-4 flex flex-col gap-2">
              <h3 class="text-[#1b130e] text-lg font-bold">{{ $book->judul }}</h3>
              <p class="text-[#96684f] text-sm">Penulis: {{ $book->penulis }}</p>
              <p class="text-[#96684f] text-sm">Penerbit: {{ $book->penerbit }}</p>
              <p class="text-[#96684f] text-sm">Tahun Terbit: {{ $book->tahun_terbit }}</p>
              <p class="text-[#96684f] text-sm">ISBN: {{ $book->isbn }}</p>
              <!-- "Pinjam buku" Button -->
              <div class="mt-4">
                <a href="#" class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow hover:shadow-lg transition-all duration-300">
                  Pinjam buku
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection
