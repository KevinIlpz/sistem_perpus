@extends('layouts.template')

@section('content')
<div class="container mx-auto px-6 py-8">
  <!-- Hero Section -->
  <div class="overflow-hidden relative rounded-xl shadow-lg">
    <div class="flex min-h-[480px] flex-col justify-end px-6 py-10 bg-cover bg-center bg-no-repeat animate__animated animate__fadeIn" 
         style="background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%), url('https://cdn.usegalileo.ai/sdxl10/f86c42ec-7a1f-476f-a0c4-3e3591a3bd55.png');">
      <div class="max-w-2xl">
        <h1 class="text-white text-4xl md:text-5xl font-extrabold leading-tight tracking-tight">
          Selamat Datang Di Web Perpustakaan Wikrama
        </h1>
        <p class="text-white mt-4 text-lg md:text-xl">
          Kami menyediakan berbagai macam buku dan materi lainnya untuk membantu siswa dan guru dalam penelitian dan kebutuhan membaca.
        </p>
      </div>
    </div>
  </div>

  <!-- Fun Facts Section -->
  <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($funfacts as $funfact)
      <!-- Siswa Teraktif -->
      <div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-300 bg-white shadow hover:shadow-lg transition-transform transform hover:scale-105 animate__animated animate__fadeInUp">
        <p class="text-gray-700 text-base font-medium">Siswa Teraktif</p>
        <p class="text-gray-900 text-2xl font-bold">{{ $funfact->siswa_teraktif }}</p>
      </div>

      <!-- Rombel Teraktif -->
      <div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-300 bg-white shadow hover:shadow-lg transition-transform transform hover:scale-105 animate__animated animate__fadeInUp">
        <p class="text-gray-700 text-base font-medium">Rombel Teraktif</p>
        <p class="text-gray-900 text-2xl font-bold">{{ $funfact->rombel_teraktif }}</p>
      </div>

      <!-- Rayon Teraktif -->
      <div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-300 bg-white shadow hover:shadow-lg transition-transform transform hover:scale-105 animate__animated animate__fadeInUp">
        <p class="text-gray-700 text-base font-medium">Rayon Teraktif</p>
        <p class="text-gray-900 text-2xl font-bold">{{ $funfact->rayon_teraktif }}</p>
      </div>

      <!-- Buku Terfavorit -->
      <div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-300 bg-white shadow hover:shadow-lg transition-transform transform hover:scale-105 animate__animated animate__fadeInUp">
        <p class="text-gray-700 text-base font-medium">Buku Terfavorit</p>
        <p class="text-gray-900 text-2xl font-bold">{{ $funfact->buku_terfavorit }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection

@section('footer')
<footer class="mt-12 px-6 py-4 border-t border-gray-200 animate__animated animate__fadeInUp">
  <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
    <p class="text-sm text-gray-600">&copy; 2023 Perpustakaan Wikrama. All rights reserved.</p>
    <div class="flex items-center gap-4 mt-2 sm:mt-0">
      <a href="#" class="text-sm text-gray-600 hover:text-gray-800 transition">Privacy Policy</a>
      <a href="#" class="text-sm text-gray-600 hover:text-gray-800 transition">Terms of Service</a>
    </div>
  </div>
</footer>
@endsection
