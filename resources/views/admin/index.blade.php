@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-blue-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-users fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Total Pengunjung</p>
                <p class="text-2xl font-bold text-white">12</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-green-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-user fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Pengunjung</p>
                <p class="text-2xl font-bold text-white">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-purple-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-globe fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Artikel</p>
                <p class="text-2xl font-bold text-white">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-orange-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-file-alt fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Total Artikel</p>
                <p class="text-2xl font-bold text-white">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-teal-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-thumbs-up fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Rayon Teraktif</p>
                <p class="text-2xl font-bold text-white">Cisarua 6</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        <div class="flex items-center">
            <div class="w-16 h-16 bg-gray-800 text-pink-400 rounded-full flex items-center justify-center shadow-md">
                <i class="fas fa-user-graduate fa-lg"></i>
            </div>
            <div class="ml-4">
                <p class="text-white font-semibold">Siswa Teraktif</p>
                <p class="text-2xl font-bold text-white">John Doe</p>
            </div>
        </div>
    </div>
</div>
@endsection