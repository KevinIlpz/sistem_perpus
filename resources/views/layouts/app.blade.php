<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/wikrama-logo.png') }}">
    <style>
        /* Enhanced responsive styles */
        .mobile-menu-btn {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -100%;
                top: 0;
                bottom: 0;
                transition: left 0.3s ease;
                z-index: 50;
            }

            .sidebar.active {
                left: 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .main-content {
                width: 100%;
                padding-left: 0;
            }
        }

        .nav-link {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .nav-link:hover {
            background-color: #4a5568;
            transform: translateX(4px);
        }

        .profile-img {
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: rotate(-5deg);
        }
    </style>
</head>
<body class="bg-gray-800 text-white">
    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn fixed top-4 right-4 z-50 p-2 bg-gray-700 rounded-lg md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="sidebar w-64 bg-gray-900 text-white shadow-lg md:relative md:left-0">
            <div class="p-3 flex items-center">
                <img src="{{ asset('images/wikrama-logo.png') }}" alt="Wikrama Logo" class="w-12 h-12 mr-4">
                <h1 class="text-2xl font-bold">SMK WIKRAMA</h1>
            </div>
            <nav class="mt-4">
                <!-- Navigation Links -->
                <a href="/admin" class="nav-link block py-2 px-4">Dashboard</a>
                <a href="/admin/blog" class="nav-link block py-2 px-4">Blog</a>
                <a href="/admin/galeri" class="nav-link block py-2 px-4">Galeri</a>
                <a href="/admin/peminjaman" class="nav-link block py-2 px-4">Peminjaman</a>
                <a href="/admin/profil" class="nav-link block py-2 px-4">Profile</a>
                <a href="/admin/user" class="nav-link block py-2 px-4">Users</a>
                <a href="/admin/visimisi" class="nav-link block py-2 px-4">Visi Misi</a>
                <a href="/admin/bukutamu" class="nav-link block py-2 px-4">Buku Tamu</a>
                <a href="/admin/buku" class="nav-link block py-2 px-4">Buku</a>
                <a href="/admin/funfact" class="nav-link block py-2 px-4">Funfact</a>
                <a href="/admin/siswa" class="nav-link block py-2 px-4">Siswa</a>
                
                <!-- Logout Form -->
                <form method="POST" action="{{ route('logout') }}" class="mt-4 border-t border-gray-700 pt-4">
                    @csrf
                    <button type="submit" class="w-full text-left py-3 px-6 hover:bg-red-600 transition-colors">
                        Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-1 p-4 md:p-6">
            <!-- Header -->
            <header class="flex flex-col md:flex-row justify-between items-center mb-6 bg-gray-700/50 p-4 rounded-lg backdrop-blur-sm">
                <h2 class="text-2xl font-bold mb-4 md:mb-0">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span class="font-medium">Admin</span>
                    <img src="{{ asset('images/logo-login.jpg') }}" alt="Profile" 
                         class="profile-img w-10 h-10 rounded-full border-2 border-purple-400">
                </div>
            </header>

            <!-- Page Content -->
            <main class="mt-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', () => {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Close menu when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!e.target.closest('.sidebar') && !e.target.closest('.mobile-menu-btn')) {
                    document.querySelector('.sidebar').classList.remove('active');
                }
            }
        });
    </script>
</body>
</html>