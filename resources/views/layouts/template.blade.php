<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Perpustakaan Wikrama')</title>
  <!-- Preconnect and Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/wikrama-logo.png') }}" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Animate.css for additional animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    /* Custom CSS for mobile menu responsiveness */
    .mobile-menu { display: none; }
    @media (max-width: 1024px) {
      .mobile-menu { display: block; }
      .desktop-menu { display: none; }
    }
  </style>
  <script>
    // Toggle flyout menu with a fade animation
    function toggleFlyout() {
      const flyout = document.getElementById('flyoutMenu');
      flyout.classList.toggle('hidden');
      flyout.classList.toggle('animate__fadeIn');
    }
    // Hide the flyout when clicking outside
    document.addEventListener('click', function(event) {
      const flyoutMenu = document.getElementById('flyoutMenu');
      const flyoutButton = document.querySelector('button[onclick="toggleFlyout()"]');
      if (flyoutMenu && flyoutButton && !flyoutMenu.contains(event.target) && !flyoutButton.contains(event.target)) {
        flyoutMenu.classList.add('hidden');
      }
    });
  </script>
</head>
<body class="bg-gray-50 font-sans antialiased">
  <!-- Navbar Section -->
  @section('navbar')
  <header class="bg-gradient-to-r from-blue-500 to-purple-500 shadow-lg">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo Section -->
        <div class="flex-shrink-0 flex items-center">
          <a href="/" class="flex items-center">
            <img src="{{ asset('images/wikrama-logo.png') }}" alt="Logo Wikrama" class="h-10 w-auto transition-transform duration-300 hover:scale-110" />
            <span class="ml-2 text-white text-xl font-extrabold">Perpustakaan Wikrama</span>
          </a>
        </div>
        <!-- Desktop Menu -->
        <div class="hidden lg:flex lg:space-x-8">
          <a href="profile" class="text-white text-lg font-medium transition hover:text-yellow-300">Profile</a>
          <a href="information" class="text-white text-lg font-medium transition hover:text-yellow-300">Information</a>
          <a href="opac" class="text-white text-lg font-medium transition hover:text-yellow-300">OPAC</a>
          <a href="blog" class="text-white text-lg font-medium transition hover:text-yellow-300">Blog</a>
          <a href="contact" class="text-white text-lg font-medium transition hover:text-yellow-300">Contact</a>
          <a href="download" class="text-white text-lg font-medium transition hover:text-yellow-300">Download</a>
          <a href="ebook" class="text-white text-lg font-medium transition hover:text-yellow-300">eBook</a>
        </div>
        <!-- User and Mobile Menu -->
        <div class="flex items-center">
          <!-- Flyout User Menu -->
          <div class="relative">
            <button onclick="toggleFlyout()" class="flex items-center bg-white text-gray-800 rounded-full p-2 transition transform hover:scale-105 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 256 256">
                <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
              </svg>
            </button>
            <!-- Flyout Dropdown Menu -->
            <div id="flyoutMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden animate__animated">
              <div class="px-4 py-3 border-b border-gray-200">
                <p class="text-sm text-gray-900">John Doe</p>
              </div>
              <a href="login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">Login</a>
            </div>
          </div>
          <!-- Mobile Menu Toggle -->
          <div class="lg:hidden ml-4">
            <button id="hamburger-button" class="text-white focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 transition-transform duration-300 hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu-dropdown" class="hidden lg:hidden bg-white shadow-md">
      <div class="px-4 pt-2 pb-4 space-y-1">
        <a href="profile" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">Profile</a>
        <a href="information" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">Information</a>
        <a href="opac" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">OPAC</a>
        <a href="contact" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">Contact</a>
        <a href="download" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">Download</a>
        <a href="ebook" class="block text-gray-800 text-lg font-medium transition hover:bg-gray-100 rounded-md px-3 py-2">eBook</a>
      </div>
    </div>
  </header>
  @show

  <!-- Main Content Section -->
  <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    @yield('content')
  </main>

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-sm">&copy; {{ date('Y') }} Perpustakaan Wikrama. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Mobile menu toggle with fade-down effect
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu-dropdown');

    hamburgerButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
      mobileMenu.classList.toggle('animate__fadeInDown');
    });
  </script>
</body>
</html>
