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
            <a id="tentang-tab" href="#" class="flex flex-col items-center justify-center border-b-4 border-[#FAC638] text-[#201A09] py-4 transition-colors duration-300 ease-in-out">
              <p class="text-sm font-bold tracking-[0.015em]">Tentang</p>
            </a>
            <a id="fasilitas-tab" href="#" class="flex flex-col items-center justify-center border-b-4 border-transparent text-[#A07D1C] py-4 hover:border-[#FAC638] hover:text-[#201A09] transition-colors duration-300 ease-in-out">
              <p class="text-sm font-bold tracking-[0.015em]">Fasilitas</p>
            </a>
          </div>
        </div>
        
        <!-- Tentang Perpustakaan Card -->
        <div id="tentang-section" class="animate__animated animate__fadeInUp">
          <div class="bg-white p-6 rounded-xl shadow-lg">
            <!-- Card Header -->
            <h2 class="text-2xl font-bold text-[#0e121b] mb-4">Identitas Perpustakaan</h2>
            
            <!-- Details Grid (3 columns) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <!-- Column 1 -->
              <div>
                <p class="font-semibold text-[#0e121b]">Nama Perpustakaan:</p>
                <p class="text-sm text-[#637588]">Perpustakaan SMK Wikrama</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Nama Kepala Perpustakaan:</p>
                <p class="text-sm text-[#637588]">Jakaria, S.E</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Nama Pustakawati:</p>
                <p class="text-sm text-[#637588]">Danang Andrian Wicaksana</p>
              </div>
              
              <!-- Column 2 -->
              <div>
                <p class="font-semibold text-[#0e121b]">Nomor SK Pendirian:</p>
                <p class="text-sm text-[#637588]">421.5/0036/SMK Wikrama/IX/2008</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Alamat:</p>
                <p class="text-sm text-[#637588]">Jl. Raya Wangun Kel. Sindangsari Bogor</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Kecamatan:</p>
                <p class="text-sm text-[#637588]">Bogor Timur</p>
              </div>
              
              <!-- Column 3 -->
              <div>
                <p class="font-semibold text-[#0e121b]">Kabupaten/Kota:</p>
                <p class="text-sm text-[#637588]">Bogor</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Propinsi:</p>
                <p class="text-sm text-[#637588]">Jawa Barat</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Kode Pos:</p>
                <p class="text-sm text-[#637588]">16720</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Telepon &amp; Faks:</p>
                <p class="text-sm text-[#637588]">(0251) 8242411</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">E-mail:</p>
                <p class="text-sm text-[#637588]">prohumasi@smkwikrama.net</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Luas Gedung:</p>
                <p class="text-sm text-[#637588]">96 M<sup>2</sup></p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Status Kepemilikan:</p>
                <p class="text-sm text-[#637588]">Milik sendiri</p>
                
                <p class="font-semibold text-[#0e121b] mt-3">Lokasi:</p>
                <p class="text-sm text-[#637588]">Jarak di Pusat kegiatan pembelajaran</p>
              </div>
            </div>
            
            <!-- Sasaran List -->
            <div class="mt-6">
              <p class="font-semibold text-[#0e121b]">Sasaran</p>
              <ul class="list-disc pl-5 text-sm text-[#637588] space-y-1">
                <li>Meningkatnya budaya membaca masyarakat sekolah</li>
                <li>Meningkatnya masyarakat pengunjung perpustakaan</li>
                <li>Meningkatnya pelayanan perpustakaan</li>
                <li>Terpenuhinya fungsi perpustakaan sebagai pusat informasi masyarakat sekolah</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Services Section (Fasilitas) -->
        <div id="fasilitas-section" class="hidden animate__animated animate__fadeInUp">
          <h2 class="text-[#201A09] text-2xl font-bold leading-tight tracking-[-0.015em] pb-3 pt-5 px-4">
            Services
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4 pb-5">
            <!-- Service Card: Borrowing -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M208,24H72A32,32,0,0,0,40,56V224a8,8,0,0,0,8,8H192a8,8,0,0,0,0-16H56a16,16,0,0,1,16-16H208a8,8,0,0,0,8-8V32A8,8,0,0,0,208,24Zm-8,160H72a31.82,31.82,0,0,0-16,4.29V56A16,16,0,0,1,72,40H200Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Borrowing</h2>
                <p class="text-[#A07D1C] text-sm">Learn about borrowing policies and how to get materials from other libraries</p>
              </div>
            </div>
            <!-- Service Card: Course Reserves -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Course Reserves</h2>
                <p class="text-[#A07D1C] text-sm">Find textbooks and other course materials for your classes</p>
              </div>
            </div>
            <!-- Service Card: Databases -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64ZM69.61,53.08C85.07,44.65,105.81,40,128,40s42.93,4.65,58.39,13.08C200.12,60.57,208,70.38,208,80s-7.88,19.43-21.61,26.92C170.93,115.35,150.19,120,128,120s-42.93-4.65-58.39-13.08C55.88,99.43,48,89.62,48,80S55.88,60.57,69.61,53.08ZM186.39,202.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Databases</h2>
                <p class="text-[#A07D1C] text-sm">Access our collection of electronic resources, including e-books, e-journals, and databases</p>
              </div>
            </div>
            <!-- Service Card: Interlibrary Loan -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H112V200h8a8,8,0,0,0,0-16h-8V168h8a8,8,0,0,0,0-16h-8V136h8a8,8,0,0,0,0-16h-8v-8a8,8,0,0,0-16,0v8H88a8,8,0,0,0,0,16h8v16H88a8,8,0,0,0,0,16h8v16H88a8,8,0,0,0,0,16h8v16H56V40h88V88a8,8,0,0,0,8,8h48V216Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Interlibrary Loan</h2>
                <p class="text-[#A07D1C] text-sm">Request books and articles from other libraries</p>
              </div>
            </div>
            <!-- Service Card: Research Help -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Research Help</h2>
                <p class="text-[#A07D1C] text-sm">Get help with your research, including finding sources, using databases, and citing your work</p>
              </div>
            </div>
            <!-- Service Card: Ask a Librarian -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">Ask a Librarian</h2>
                <p class="text-[#A07D1C] text-sm">Chat with a librarian for quick questions or research help</p>
              </div>
            </div>
            <!-- Service Card: FAQ -->
            <div class="group flex flex-col gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <div class="text-[#201A09]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#201A09] text-base font-bold">FAQ</h2>
                <p class="text-[#A07D1C] text-sm">Find answers to common questions about the library's services and resources</p>
              </div>
            </div>
          </div>
        </div>
        
      </div><!-- .layout-content-container -->
    </div><!-- .layout-container -->
  </div>
</div>

<!-- JavaScript to Toggle Sections -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const tentangTab = document.getElementById('tentang-tab');
    const fasilitasTab = document.getElementById('fasilitas-tab');
    const tentangSection = document.getElementById('tentang-section');
    const fasilitasSection = document.getElementById('fasilitas-section');

    const toggleSections = (activeTab, inactiveTab, showSection, hideSection) => {
      activeTab.classList.add('border-[#FAC638]', 'text-[#201A09]');
      activeTab.classList.remove('border-transparent', 'text-[#A07D1C]');
      inactiveTab.classList.add('border-transparent', 'text-[#A07D1C]');
      inactiveTab.classList.remove('border-[#FAC638]', 'text-[#201A09]');

      showSection.classList.remove('hidden');
      hideSection.classList.add('hidden');
    };

    tentangTab.addEventListener('click', (e) => {
      e.preventDefault();
      toggleSections(tentangTab, fasilitasTab, tentangSection, fasilitasSection);
    });

    fasilitasTab.addEventListener('click', (e) => {
      e.preventDefault();
      toggleSections(fasilitasTab, tentangTab, fasilitasSection, tentangSection);
    });
  });
</script>
@endsection
