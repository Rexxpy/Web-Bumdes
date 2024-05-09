<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\DataUmkmController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKegiatanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',  [HomeController::class, 'index']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sto', function () {
    return view('sto');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/loginview', [LoginController::class, 'index'])->name('loginview');
Route::get('/gantipasswdview', [LoginController::class, 'showlupa'])->name('gantipasswdview');
Route::post('/gantipasswd', [LoginController::class, 'gantipasswd'])->name('gantipasswd');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [RegisterController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/deskripsi_produk/{id}', [ProdukController::class, 'show_deskripsi'])->name('deskripsi_produk');
Route::post('/filter_produk', [ProdukController::class, 'filter']);

Route::get('/jasa', [JasaController::class, 'index']);

Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/deskripsi_wisata/{id}', [WisataController::class, 'show_deskripsi']);

Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/deskripsi_kegiatan/{id}', [KegiatanController::class, 'show_deskripsi'])->name('deskripsi_kegiatan');;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('admin');

Route::resource('/dataumkm',  DataUmkmController::class);
Route::get('dataumkm',  [DataUmkmController::class, 'index'])->name('dataumkm');
Route::post('/show_edit/{id}',  [DataUmkmController::class, 'edit'])->name('show_edit');
Route::delete('/dataumkm/hapus/{id}', [DataUmkmController::class, 'destroy'])->name('delete_umkm');

Route::get('/datauser',  [DataUserController::class, 'index']);

Route::get('/tambah_data_umkm', [DataUmkmController::class, 'show_tambah_umkm']);
Route::post('/filter_data_umkm', [DataUmkmController::class, 'filter_umkm']);

Route::resource('/datakegiatan',  DataKegiatanController::class);
Route::get('datakegiatan',  [DataKegiatanController::class, 'index'])->name('datakegiatan');
Route::post('/show_edit_kegiatan/{id}',  [DataKegiatanController::class, 'edit'])->name('show_edit_kegiatan');
Route::delete('/datakegiatan/hapus/{id}', [DataKegiatanController::class, 'destroy'])->name('delete_kegiatan');


Route::get('/tambah_data_kegiatan', [DataKegiatanController::class, 'show_tambah_kegiatan']);
