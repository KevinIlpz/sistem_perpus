@extends('layouts.template')

@section('content')
<div class="relative flex flex-col min-h-screen bg-[#FBF8EF] overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
  <div class="layout-container flex flex-col flex-grow">
    <!-- Main Content Container -->
    <div class="px-8 md:px-16 lg:px-40 flex flex-1 justify-center py-10">
      <div class="layout-content-container flex flex-col max-w-3xl flex-1 space-y-8">
        
        <!-- Hero Section -->
        <div class="p-4">
          <div class="flex min-h-[480px] flex-col items-center justify-center rounded-lg bg-cover bg-center bg-no-repeat animate__animated animate__fadeIn"
               style='background-image: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%), url("https://cdn.usegalileo.ai/sdxl10/daec9a40-808c-439c-8b11-101d6f4f3d4e.png");'>
            <div class="text-center px-4">
              <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-tight animate__animated animate__fadeInDown">
                Welcome to the Library
              </h1>
              <h2 class="text-white mt-3 text-sm md:text-base font-normal animate__animated animate__fadeInUp">
                Explore our collections, services, and facilities
              </h2>
            </div>
          </div>
        </div>
        
        <!-- Navigation Tabs -->
        <div class="pb-4">
          <div class="flex border-b border-[#EFE3C3] px-4 gap-8">
            <a id="sejarahTab" href="#" class="tab-link flex flex-col items-center justify-center border-b-4 border-[#FAC638] text-[#201A09] py-4 transition-colors duration-300 ease-in-out">
              <p class="text-sm font-bold tracking-[0.015em]">Sejarah</p>
            </a>
            <a id="visiTab" href="#" class="tab-link flex flex-col items-center justify-center border-b-4 border-transparent text-[#A07D1C] py-4 hover:border-[#FAC638] hover:text-[#201A09] transition-colors duration-300 ease-in-out">
              <p class="text-sm font-bold tracking-[0.015em]">Visi, Misi &amp; Motto</p>
            </a>
            <a id="strukturTab" href="#" class="tab-link flex flex-col items-center justify-center border-b-4 border-transparent text-[#A07D1C] py-4 hover:border-[#FAC638] hover:text-[#201A09] transition-colors duration-300 ease-in-out">
              <p class="text-sm font-bold tracking-[0.015em]">Struktur Organisasi</p>
            </a>
          </div>
        </div>
        
        <!-- Section Content -->
        <!-- Sejarah Content -->
        <div id="sejarahContent" class="section-content px-4 pb-3 pt-5 animate__animated animate__fadeIn">
          <h2 class="text-[#201A09] text-2xl font-bold leading-tight tracking-[-0.015em]">Sejarah</h2>
          <p class="text-[#201A09] text-base font-normal leading-normal mt-4">
            Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, Kecamatan Bogor Timur, Kota Bogor didirikan pada tahun 1996.
            Secara fisik perpustakaan sekolah terletak di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, tepatnya berada di area bangunan seluas 96 m<sup>2</sup>.
            Lokasi ini berada di pusat kegiatan pembelajaran yang mudah dijangkau oleh peserta didik, pendidik dan tenaga kependidikan. Semenjak didirikan, keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah.
          </p>
        </div>
        
        <!-- Visi, Misi & Motto Content -->
        <div id="visiContent" class="section-content hidden px-4 pb-3 pt-5">
          <h2 class="text-[#201A09] text-2xl font-bold leading-tight tracking-[-0.015em]">Visi, Misi &amp; Motto</h2>
          @foreach ($visimisis as $visimisi)
          <div class="mt-4">
            <p class="text-[#201A09] text-base font-normal leading-normal">
              <strong>Visi:</strong> {{ $visimisi->visi }}
            </p>
            <p class="text-[#201A09] text-base font-normal leading-normal mt-2">
              <strong>Misi:</strong>
              <ol class="list-decimal pl-5">
                @foreach (explode(',', $visimisi->misi) as $misiItem)
                <li>{{ $misiItem }}</li>
                @endforeach
              </ol>
            </p>
            <p class="text-[#201A09] text-base font-normal leading-normal mt-2">
              <strong>Motto:</strong> {{ $visimisi->motto }}
            </p>
          </div>
          @endforeach
        </div>
        
        <!-- Struktur Organisasi Content -->
        <div id="strukturContent" class="section-content hidden px-4 pb-3 pt-5">
          <h2 class="text-[#201A09] text-2xl font-bold leading-tight tracking-[-0.015em]">Struktur Organisasi</h2>
          <img src="{{ asset('images/image.png') }}" alt="Struktur Organisasi" class="w-full h-auto rounded-lg shadow-lg mt-4">
        </div>
        
      </div><!-- .layout-content-container -->
    </div><!-- .layout-container -->
  </div>
</div>

<!-- JavaScript for Smooth Toggle with Animation -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-link");
    const sections = document.querySelectorAll(".section-content");

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", (event) => {
        event.preventDefault();

        // Remove active classes from all tabs
        tabs.forEach((t) => {
          t.classList.remove("border-b-[#FAC638]", "text-[#201A09]");
          t.classList.add("border-transparent", "text-[#A07D1C]");
        });

        // Activate clicked tab
        tab.classList.add("border-b-[#FAC638]", "text-[#201A09]");
        tab.classList.remove("border-transparent", "text-[#A07D1C]");

        // Hide all sections
        sections.forEach((section) => {
          section.classList.add("hidden");
          section.classList.remove("animate__fadeIn");
        });

        // Show corresponding section with fade-in animation
        const activeSection = sections[index];
        activeSection.classList.remove("hidden");
        activeSection.classList.add("animate__animated", "animate__fadeIn");

        // Remove animation classes once the animation ends for smoother future toggling
        activeSection.addEventListener('animationend', () => {
          activeSection.classList.remove("animate__animated", "animate__fadeIn");
        }, { once: true });
      });
    });
  });
</script>
@endsection
