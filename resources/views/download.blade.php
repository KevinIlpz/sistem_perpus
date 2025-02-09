@extends('layouts.template')

@section('content')
<div class="min-h-screen bg-[#fbf9f8] flex items-center justify-center px-8 py-8" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="w-full max-w-3xl">
    <!-- Page Title -->
    <div class="text-center mb-8">
      <h1 class="text-4xl md:text-5xl font-bold text-[#111418] animate__animated animate__fadeInDown">
        Downloads
      </h1>
    </div>

    <!-- Section Header -->
    <h3 class="px-4 pb-2 pt-4 text-lg font-bold text-[#111418] tracking-tight animate__animated animate__fadeInUp">
      Panduan
    </h3>

    <!-- Download Card -->
    <div class="mt-4">
      <div class="flex items-center justify-between p-4 bg-white rounded-xl shadow hover:shadow-2xl transition-all duration-300 animate__animated animate__fadeInUp">
        <div class="flex items-center gap-4">
          <div class="w-16 h-16 bg-center bg-no-repeat bg-cover rounded-xl" style='background-image: url("https://cdn.usegalileo.ai/stability/ac67aaad-1087-4c16-9ec8-9caaeec2e456.png");'></div>
          <div class="flex flex-col">
            <p class="text-base font-semibold text-[#111418]">Cara Meminjam Buku Di Perpustakaan Wikrama</p>
            <p class="text-sm text-[#637588]">Langkah-langkah Meminjam Buku Di Perpustakaan Wikrama</p>
          </div>
        </div>
        <div>
          <a href="#" class="flex items-center justify-center p-3 bg-[#f0f2f4] text-[#111418] rounded-xl transition-all hover:bg-[#e0e4e8]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
              <path d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Featured Downloads Section -->
    <div class="mt-8 px-4">
      <h3 class="text-lg font-bold text-[#111418] mb-4 animate__animated animate__fadeInUp">Featured Downloads</h3>
      <ul class="space-y-4">
        <li class="p-4 bg-[#f9f9f9] rounded-xl shadow transition-all hover:shadow-lg animate__animated animate__fadeInUp">
          <p class="font-medium text-[#111418]">E-Library Guide</p>
          <p class="text-sm text-[#637588]">How to use the library's digital resources effectively.</p>
        </li>
        <li class="p-4 bg-[#f9f9f9] rounded-xl shadow transition-all hover:shadow-lg animate__animated animate__fadeInUp">
          <p class="font-medium text-[#111418]">Membership Terms & Conditions</p>
          <p class="text-sm text-[#637588]">Understand your rights and obligations as a member.</p>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
