<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// berita
Route::resource('/berita', BeritaController::class);
// artikel
Route::resource('artikel', ArtikelController::class);
// Route::get('/artikel', [ArtikelController::class, 'lihatArtikel'])->name('artikel');
// Route::get('/artikel/tambah/{id}', [ArtikelController::class, 'tambahArtikel'])->name('tambah_artikel');
// Route::post('/artikel', [ArtikelController::class, 'tambah']);
// Route::get('/penilaian/{id}', [PenilaianController::class, 'jalur'])->name('ubah_penilaian')->middleware('auth');
// Route::post('/penilaian/{id}/edit', [PenilaianController::class, 'ubah']);
// Route::post('/penilaian/{id}/delete', [PenilaianController::class, 'hapus']);
