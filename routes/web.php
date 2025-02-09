<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\eBookController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\PeminjamanAdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriAdminController;
Use App\Http\Controllers\profilAdminController;
Use App\Http\Controllers\FunfactController;
Use App\Http\Controllers\userAdminController;
Use App\Http\Controllers\visimisiAdminController;
Use App\Http\Controllers\bukuAdminController;
Use App\Http\Controllers\bukuTamuAdminController;
Use App\Http\Controllers\SiswaAdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index']);


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/ebook', [eBookController::class, 'index'])->name('ebook');
Route::get('/show-blog/{id}', [BlogController::class, 'show'])->name('show-blog');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    //Blog
    Route::get('/', [IndexAdminController::class, 'index'])->name('index');
    Route::get('/blog', [BlogAdminController::class, 'index'])->name('blog');
    Route::get('/create-blog', [BlogAdminController::class, 'create'])->name('create-blog');
    Route::post('/store-blog', [BlogAdminController::class, 'store'])->name('store-blog');
    Route::get('/edit-blog/{id}', [BlogAdminController::class, 'edit'])->name('edit-blog');
    Route::get('/show-blog/{id}', [BlogAdminController::class, 'show'])->name('show-blog');
    Route::put('/update-blog/{id}', [BlogAdminController::class, 'update'])->name('update-blog');
    Route::delete('/delete-blog/{id}', [BlogAdminController::class, 'destroy'])->name('delete-blog');

    //Galeri
    Route::get('/galeri', [GaleriAdminController::class, 'index'])->name('galeri');
    Route::get('/create-galeri', [GaleriAdminController::class, 'create'])->name('create-galeri');
    Route::post('/store-galeri', [GaleriAdminController::class, 'store'])->name('store-galeri');
    Route::get('/edit-galeri/{id}', [GaleriAdminController::class, 'edit'])->name('edit-galeri');
    Route::put('/update-galeri/{id}', [GaleriAdminController::class, 'update'])->name('update-galeri');
    Route::delete('/delete-galeri/{id}', [GaleriAdminController::class, 'destroy'])->name('delete-galeri');

    //Peminjaman
    Route::get('/peminjaman', [PeminjamanAdminController::class, 'index'])->name('peminjaman');
    Route::get('/create-peminjaman', [PeminjamanAdminController::class, 'create'])->name('create-peminjaman');
    Route::post('/store-peminjaman', [PeminjamanAdminController::class, 'store'])->name('store-peminjaman');
    Route::get('/edit-peminjaman/{id}', [PeminjamanAdminController::class, 'edit'])->name('edit-peminjaman');
    Route::put('/update-peminjaman/{id}', [PeminjamanAdminController::class, 'update'])->name('update-peminjaman');
    Route::delete('/delete-peminjaman/{id}', [PeminjamanAdminController::class, 'destroy'])->name('delete-peminjaman');

    //Profil
    Route::get('/profil', [ProfilAdminController::class, 'index'])->name('profil');
    Route::get('/create-profil', [ProfilAdminController::class, 'create'])->name('create-profil');
    Route::post('/store-profil', [ProfilAdminController::class, 'store'])->name('store-profil');
    Route::get('/edit-profil/{id}', [ProfilAdminController::class, 'edit'])->name('edit-profil');
    Route::put('/update-profil/{id}', [ProfilAdminController::class, 'update'])->name('update-profil');
    Route::delete('/delete-profil/{id}', [ProfilAdminController::class, 'destroy'])->name('delete-profil');

    //User
    Route::get('/user', [userAdminController::class, 'index'])->name('user');
    Route::get('/create-user', [userAdminController::class, 'create'])->name('create-user');
    Route::post('/store-user', [userAdminController::class, 'store'])->name('store-user');
    Route::get('/edit-user/{id}', [userAdminController::class, 'edit'])->name('edit-user');
    Route::put('/update-user/{id}', [userAdminController::class, 'update'])->name('update-user');
    Route::delete('/delete-user/{id}', [userAdminController::class, 'destroy'])->name('delete-user');

    //Visi Misi
    Route::get('/visimisi', [visimisiAdminController::class, 'index'])->name('visimisi');
    Route::get('/create-visimisi', [visimisiAdminController::class, 'create'])->name('create-visimisi');
    Route::post('/store-visimisi', [visimisiAdminController::class, 'store'])->name('store-visimisi');
    Route::get('/edit-visimisi/{id}', [visimisiAdminController::class, 'edit'])->name('edit-visimisi');
    Route::put('/update-visimisi/{id}', [visimisiAdminController::class, 'update'])->name('update-visimisi');
    Route::delete('/delete-visimisi/{id}', [visimisiAdminController::class, 'destroy'])->name('delete-visimisi');

    //BukuTamu
    Route::get('/bukutamu', [bukuTamuAdminController::class, 'index'])->name('bukutamu');
    Route::get('/create-bukutamu', [bukuTamuAdminController::class, 'create'])->name('create-bukutamu');
    Route::post('/store-bukutamu', [bukuTamuAdminController::class, 'store'])->name('store-bukutamu');
    Route::get('/edit-bukutamu/{id}', [bukuTamuAdminController::class, 'edit'])->name('edit-bukutamu');
    Route::put('/update-bukutamu/{id}', [bukuTamuAdminController::class, 'update'])->name('update-bukutamu');
    Route::delete('/delete-bukutamu/{id}', [bukuTamuAdminController::class, 'destroy'])->name('delete-bukutamu');

    //Buku
    Route::get('/buku', [bukuAdminController::class, 'index'])->name('buku');
    Route::get('/create-buku', [bukuAdminController::class, 'create'])->name('create-buku');
    Route::post('/store-buku', [bukuAdminController::class, 'store'])->name('store-buku');
    Route::get('/edit-buku/{id}', [bukuAdminController::class, 'edit'])->name('edit-buku');
    Route::put('/update-buku/{id}', [bukuAdminController::class, 'update'])->name('update-buku');
    Route::delete('/delete-buku/{id}', [bukuAdminController::class, 'destroy'])->name('delete-buku');

    //Funfact
    Route::get('/funfact', [FunfactController::class, 'index'])->name('funfact');
    Route::get('/create-funfact', [FunfactController::class, 'create'])->name('create-funfact');
    Route::post('/store-funfact', [FunfactController::class, 'store'])->name('store-funfact');
    Route::get('/edit-funfact/{id}', [FunfactController::class, 'edit'])->name('edit-funfact');
    Route::put('/update-funfact/{id}', [FunfactController::class, 'update'])->name('update-funfact');
    Route::delete('/delete-funfact/{id}', [FunfactController::class, 'destroy'])->name('delete-funfact');

    // Siswa Routes
        Route::get('/siswa', [SiswaAdminController::class, 'index'])->name('siswa');
        Route::get('/create-siswa', [SiswaAdminController::class, 'create'])->name('create-siswa');
        Route::post('/store-siswa', [SiswaAdminController::class, 'store'])->name('store-siswa');
        Route::get('/edit-siswa/{id}', [SiswaAdminController::class, 'edit'])->name('edit-siswa');
        Route::put('/update-siswa/{id}', [SiswaAdminController::class, 'update'])->name('update-siswa');
        Route::delete('/delete-siswa/{id}', [SiswaAdminController::class, 'destroy'])->name('delete-siswa');

});



// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
