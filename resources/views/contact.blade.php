@extends('layouts.template')

@section('content')
<div class="min-h-screen bg-[#fbf9f8] flex items-center justify-center px-4 py-8" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="w-full max-w-3xl">
    <!-- Page Title -->
    <div class="mb-8 text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-[#111418] animate__animated animate__fadeInDown">
        Contact Us
      </h1>
    </div>
    
    <!-- Contact Information -->
    <div class="space-y-4">
      <!-- Address / MapPin Row -->
      <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-xl transition-all animate__animated animate__fadeInUp">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center w-12 h-12 bg-[#f0f2f4] rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#111418]" fill="currentColor" viewBox="0 0 256 256">
              <path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base font-medium text-[#111418]">(931) 648-5690</p>
            <p class="text-sm text-[#637588]">Jl. Raya Wangun, Kel. Sindangsari, Bogor Timur 16720</p>
          </div>
        </div>
        <div>
          <button class="px-4 py-2 bg-[#f0f2f4] text-[#111418] rounded-lg text-sm font-medium transition-all hover:bg-[#e0e4e8]">
            Directions
          </button>
        </div>
      </div>
      
      <!-- Email Row -->
      <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-xl transition-all animate__animated animate__fadeInUp">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center w-12 h-12 bg-[#f0f2f4] rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#111418]" fill="currentColor" viewBox="0 0 256 256">
              <path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96v96a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM128,37.76,206.4,88H49.6ZM40,104.65,120.45,160,40,215.35Zm176,110.7L135.55,160,216,104.65V208Z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base font-medium text-[#111418]">Contact Our Staff</p>
            <p class="text-sm text-[#637588]">Email us and we'll be happy to answer your questions.</p>
          </div>
        </div>
        <div>
          <button class="px-4 py-2 bg-[#f0f2f4] text-[#111418] rounded-lg text-sm font-medium transition-all hover:bg-[#e0e4e8]">
            Email
          </button>
        </div>
      </div>
      
      <!-- Phone / Admissions Row -->
      <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow hover:shadow-xl transition-all animate__animated animate__fadeInUp">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center w-12 h-12 bg-[#f0f2f4] rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#111418]" fill="currentColor" viewBox="0 0 256 256">
              <path d="M222.18,158.08l-48-21.37a16,16,0,0,0-15.6,1.17l-23,15.34a94.1,94.1,0,0,1-42.07-42.07l15.34-23a16,16,0,0,0,1.17-15.6l-21.37-48a16,16,0,0,0-18.07-9.09l-40,8.89A16,16,0,0,0,32,61.75c0,79.4,64.6,144,144,144a16,16,0,0,0,7.66-1.84l8.89-40A16,16,0,0,0,222.18,158.08ZM183.34,200c-68.66,0-124-55.34-124-124a2,2,0,0,1,1.61-2l39.95-8.88a1.94,1.94,0,0,1,.44-.05,2,2,0,0,1,1.83,1.19l21.37,48a2,2,0,0,1-.15,2l-15.34,23a8,8,0,0,0-.68,7.8,110.1,110.1,0,0,0,49.1,49.1,8,8,0,0,0,7.8-.68l23-15.34a2,2,0,0,1,2-.15l48,21.37a2,2,0,0,1,1.14,2.27l-8.88,39.95A2,2,0,0,1,183.34,200Z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base font-medium text-[#111418]">Admissions</p>
            <p class="text-sm text-[#637588]">Questions about attending Westwood High School?</p>
          </div>
        </div>
        <div>
          <button class="px-4 py-2 bg-[#f0f2f4] text-[#111418] rounded-lg text-sm font-medium transition-all hover:bg-[#e0e4e8]">
            Call
          </button>
        </div>
      </div>
    </div>
    
    <!-- Google Maps -->
    <div class="mt-8 flex justify-center">
      <div class="w-full rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInUp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0139659889433!2d106.84130407410248!3d-6.645186664959704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1730359833257!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    
  </div>
</div>
@endsection
