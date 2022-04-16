<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\KategoriController;
use App\Http\Controllers\Backend\ProdukController;
use App\Http\Controllers\Backend\PesananController;
use App\Http\Controllers\Backend\LaporanController;
use App\Http\Controllers\Backend\PelangganController;

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
    return view('auth.login');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout1');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kategori/index', [KategoriController::class, 'index'])->name('indexKategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('editKategori');
Route::post('/kategori/post', [KategoriController::class, 'store'])->name('storeKategori');
Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('updateKategori');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('destroyKategori');

Route::get('/produk/index', [ProdukController::class, 'index'])->name('indexProduk');
// Route::get('/produk/index/search', [ProdukController::class, 'search'])->name('searchProduk');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('createProduk');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('editProduk');
Route::post('/produk/post', [ProdukController::class, 'store'])->name('storeProduk');
Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('updateProduk');
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('destroyProduk');
Route::get('/produk/download', [ProdukController::class, 'download'])->name('downloadProduk');
Route::post('/produk/import', [ProdukController::class, 'import'])->name('importProduk');

Route::get('/pesanan/index', [PesananController::class, 'index'])->name('indexPesanan');
Route::get('/pesanan/create', [PesananController::class, 'create'])->name('createPesanan');
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('editPesanan');
Route::post('/pesanan/post', [PesananController::class, 'store'])->name('storePesanan');
Route::post('/pesanan/update/{id}', [PesananController::class, 'update'])->name('updatePesanan');
Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy'])->name('destroyPesanan');

Route::get('/laporan/index', [LaporanController::class, 'index'])->name('indexLaporan');
Route::get('/laporan/index/cetak-pdf', [LaporanController::class, 'create'])->name('createLaporan');

Route::get('/pelanggan/index', [PelangganController::class, 'index'])->name('indexPelanggan');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('editPelanggan');
Route::post('/pelanggan/post', [PelangganController::class, 'store'])->name('storePelanggan');
Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('updatePelanggan');
Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'destroy'])->name('destroyPelanggan');
