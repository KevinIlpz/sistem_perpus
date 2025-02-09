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
        /* Custom styles for animations and transitions */
        .nav-link {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .nav-link:hover {
            background-color: #4a5568; /* Darker gray */
            transform: translateY(-2px);
        }
        .header {
            transition: background-color 0.3s ease;
        }
        .header:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .profile-img {
            transition: transform 0.3s ease;
        }
        .profile-img:hover {
            transform: scale(1.1);
        }
        .sidebar {
            height: 100vh; /* Full height */
        }
    </style>
</head>
<body class="bg-gray-800 text-white">
    <div class="flex">
        <div class="w-64 bg-gray-900 text-white shadow-lg sidebar">
            <div class="p-3 flex items-center">
                <img src="{{ asset('images/wikrama-logo.png') }}" alt="Wikrama Logo" class="w-12 h-12 mr-4"> <!-- Image of Wikrama -->
                <h1 class="text-2xl font-bold">SMK WIKRAMA</h1>
            </div>
            <nav class="mt-4">
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </nav>
        </div>
        <div class="w-5/6 p-6">
            <header class="flex justify-between items-center mb-6 header p-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold">Dashboard</h2>
                <div class="flex items-center">
                    <span class="mr-2 font-bold">Admin</span>
                    <img src="{{ asset('images/logo-login.jpg') }}" alt="Profile" class="profile-img w-10 h-10 rounded-full">
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>
