<?php

use App\Http\Controllers\AboutAsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\DataMataKuliaController;
use App\Http\Controllers\DataMatakuliahController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;

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




Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    //semua url selain Auth dan logout
    Route::get('/', [HomeController::class, 'index']);

Route::get('/aboutas', [AboutAsController::class, 'index']);

Route::resource('contactus', ContactUsController::class);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::resource('/buku', BukuController::class);

Route::resource('/transaksi', TransaksiController::class);

Route::post('cari', [TransaksiController::class, 'cari'])->name('cari');

Route::post('cari', [BukuController::class, 'cari'])->name('cari');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


