<?php

use Illuminate\http\Request;
use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriKategoriController;
use App\Http\Controllers\ProfilController;

//Bukutamu
Route::post('/bukutamu', [BukutamuController::class, 'create']);
Route::get('/bukutamu', [BukutamuController::class, 'index']);
Route::put('/bukutamu/{id}', [BukutamuController::class, 'update']);
Route::delete('/bukutamu/{id}', [BukutamuController::class, 'destroy']);

//Artikel
Route::post('/artikel', [ArtikelController::class, 'create']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

//Galeri
Route::post('/galeri', [GaleriController::class, 'create']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::put('/galeri/{id}', [GaleriController::class, 'update']);
Route::delete('/galeri/{id}', [GaleriController::class, 'destroy']);

//GaleriKategori
Route::post('/galerikategori', [GaleriKategoriController::class, 'create']);
Route::get('/galerikategori', [GaleriKategoriController::class, 'index']);
Route::put('/galerikategori/{id}', [GaleriKategoriController::class, 'update']);
Route::delete('/galerikategori/{id}', [GaleriKategoriController::class, 'destroy']);

//Profil
Route::post('/profil', [ProfilController::class, 'create']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::put('/profil/{id}', [ProfilController::class, 'update']);
Route::delete('/profil/{id}', [ProfilController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});