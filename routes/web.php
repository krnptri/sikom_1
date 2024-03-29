<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;

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

// Route::get('/', function () {
//     return view('_template_back.layout');
// });

// ROUTE BARU
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

//ROUTE CRUD BUKU
Route::resource('buku', BukuController::class)->middleware('auth');
Route::get('export_pdf_buku', [BukuController::class, 'export_pdf'])->name('export_pdf_buku')->middleware('role:petugas, administrator, peminjam');
Route::get('/export_excel_buku', [BukuController::class, 'export_excel'])->name('export_excel_buku');
Route::post('/import_excel_buku', [BukuController::class, 'import_excel'])->name('import_excel_buku');

// ROUTE CRUD PMINJAMAN
Route::resource('peminjaman', PeminjamanController::class);

// ROUTE CRUD ULASAN BUKU
Route::resource( 'ulasan_buku', UlasanBukuController::class);
