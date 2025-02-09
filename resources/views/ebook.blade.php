@extends('layouts.template')

@section('content')
<div class="min-h-screen bg-[#f8f9fc] flex flex-col items-center py-10 px-4" style='font-family: Lexend, "Noto Sans", sans-serif;'>
  <div class="w-full max-w-4xl">
    <!-- Page Title -->
    <div class="text-center mb-8">
      <h1 class="text-4xl md:text-5xl font-bold text-[#0e121b] animate__animated animate__fadeInDown">
        eBooks
      </h1>
    </div>

    <!-- Improved Search Bar -->
    <div class="mb-8">
      <form method="GET" action="#">
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4e6597]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
          </span>
          <input
            type="text"
            name="search"
            placeholder="Search eBooks"
            class="w-full pl-12 pr-4 py-3 rounded-xl bg-[#e7ebf3] text-[#0e121b] focus:outline-none focus:ring-2 focus:ring-blue-300 transition-colors duration-200"
          />
        </div>
      </form>
    </div>

    <!-- eBook Categories -->
    <div class="mb-10 animate__animated animate__fadeInUp">
      <h2 class="text-xl font-bold text-[#0e121b] mb-4">
        eBook Categories
      </h2>
      <div class="flex flex-wrap gap-3">
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          All
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Biography &amp; Memoir
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Business &amp; Finance
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Cooking
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Education
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Fiction &amp; Literature
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          Health &amp; Wellness
        </div>
        <div class="px-4 py-2 bg-[#e7ebf3] text-[#0e121b] rounded-full text-sm font-medium">
          History
        </div>
      </div>
    </div>

       <!-- Popular eBooks -->
       <div class="mb-10">
        <h2 class="text-2xl font-bold text-[#0e121b] mb-6 animate__animated animate__fadeInUp">
          Popular eBooks
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/45b7eb40-b9f0-4c60-be8f-87db55b4adbf.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The 7 Habits of Highly Effective People</h3>
              <p class="text-sm text-[#4e6597]">Stephen R. Covey</p>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/f00dbb34-51c7-4a71-98a2-dc12ba546b39.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Educated: A Memoir</h3>
              <p class="text-sm text-[#4e6597]">Tara Westover</p>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/49aac2b2-749a-48b6-ac97-524648f7c4fd.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The Four Agreements</h3>
              <p class="text-sm text-[#4e6597]">Don Miguel Ruiz</p>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/f1272293-294a-48e2-8551-14fae9a133d5.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Sapiens: A Brief History of Humankind</h3>
              <p class="text-sm text-[#4e6597]">Yuval Noah Harari</p>
            </div>
          </div>
          <!-- More cards as needed... -->
        </div>
      </div>
  
      <!-- New Arrivals -->
      <div class="mb-10">
        <h2 class="text-2xl font-bold text-[#0e121b] mb-6 animate__animated animate__fadeInUp">
          New Arrivals
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/ff0bda86-2705-4772-93d5-67a3db704e7a.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The 7 Habits of Highly Effective People</h3>
              <p class="text-sm text-[#4e6597]">Stephen R. Covey</p>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/5f7a1ce9-3219-478f-ba04-3d72fa332053.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Educated: A Memoir</h3>
              <p class="text-sm text-[#4e6597]">Tara Westover</p>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/2ebb48be-77d1-49e3-a173-96894277ed31.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The Four Agreements</h3>
              <p class="text-sm text-[#4e6597]">Don Miguel Ruiz</p>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/72f9549e-c606-4095-bda5-e7c08fd00c37.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Sapiens: A Brief History of Humankind</h3>
              <p class="text-sm text-[#4e6597]">Yuval Noah Harari</p>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/5f7dad30-2066-41fc-a044-5022b8cc5988.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Becoming</h3>
              <p class="text-sm text-[#4e6597]">Michelle Obama</p>
            </div>
          </div>
          <!-- Card 6 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/42c45ecf-3dd3-43d9-adf6-9c6a849ef06c.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The Alchemist</h3>
              <p class="text-sm text-[#4e6597]">Paulo Coelho</p>
            </div>
          </div>
          <!-- Card 7 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/bad439a7-acf6-4a05-8d05-300ef2b12e70.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">The Subtle Art of Not Giving a F*ck</h3>
              <p class="text-sm text-[#4e6597]">Mark Manson</p>
            </div>
          </div>
          <!-- Card 8 -->
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 animate__animated animate__fadeInUp">
            <div class="aspect-video bg-center bg-cover rounded-t-xl" style="background-image: url('https://cdn.usegalileo.ai/stability/01d598b3-52fc-4576-a734-07766c6869ac.png');"></div>
            <div class="p-4">
              <h3 class="text-lg font-semibold text-[#0e121b]">Educated: A Memoir</h3>
              <p class="text-sm text-[#4e6597]">Tara Westover</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
