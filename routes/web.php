<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratPinjamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
//untuk menghubungkan ke menunya//
Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('admin', [HomeController::class, 'admin']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('admin', [HomeController::class, 'admin']);
Route::get('pegawai', [HomeController::class, 'pegawai']);

Route::get('admin/data/user', [UserController::class, 'index']);
Route::get('admin/data/user/create', [UserController::class, 'tambah']);
Route::post('admin/data/user/create', [UserController::class, 'simpan']);
Route::get('admin/data/user/edit/{id}', [UserController::class, 'edit']);
Route::post('admin/data/user/edit/{id}', [UserController::class, 'update']);
Route::get('admin/data/user/delete/{id}', [UserController::class, 'hapus']);

Route::get('admin/data/suratmasuk', [SuratMasukController::class, 'index']);
Route::get('admin/data/suratmasuk/create', [SuratMasukController::class, 'tambah']);
Route::post('admin/data/suratmasuk/create', [SuratMasukController::class, 'simpan']);
Route::get('admin/data/suratmasuk/edit/{id}', [SuratMasukController::class, 'edit']);
Route::post('admin/data/suratmasuk/edit/{id}', [SuratMasukController::class, 'update']);
Route::get('admin/data/suratmasuk/delete/{id}', [SuratMasukController::class, 'hapus']);

Route::get('admin/data/suratkeluar', [SuratKeluarController::class, 'index']);
Route::get('admin/data/suratkeluar/create', [SuratKeluarController::class, 'tambah']);
Route::post('admin/data/suratkeluar/create', [SuratKeluarController::class, 'simpan']);
Route::get('admin/data/suratkeluar/edit/{id}', [SuratKeluarController::class, 'edit']);
Route::post('admin/data/suratkeluar/edit/{id}', [SuratKeluarController::class, 'update']);
Route::get('admin/data/suratkeluar/delete/{id}', [SuratKeluarController::class, 'hapus']);

Route::get('admin/data/suratpinjam', [SuratPinjamController::class, 'index']);
Route::get('admin/data/suratpinjam/create', [SuratPinjamController::class, 'tambah']);
Route::post('admin/data/suratpinjam/create', [SuratPinjamController::class, 'simpan']);
Route::get('admin/data/suratpinjam/edit/{id}', [SuratPinjamController::class, 'edit']);
Route::post('admin/data/suratpinjam/edit/{id}', [SuratPinjamController::class, 'update']);
Route::get('admin/data/suratpinjam/delete/{id}', [SuratPinjamController::class, 'hapus']);

Route::get('admin/data/surattugas', [SuratTugasController::class, 'index']);
Route::get('admin/data/surattugas/create', [SuratTugasController::class, 'tambah']);
Route::post('admin/data/surattugas/create', [SuratTugasController::class, 'simpan']);
Route::get('admin/data/surattugas/edit/{id}', [SuratTugasController::class, 'edit']);
Route::post('admin/data/surattugas/edit/{id}', [SuratTugasController::class, 'update']);
Route::get('admin/data/surattugas/delete/{id}', [SuratTugasController::class, 'hapus']);

Route::get('admin/data/beritaacara', [BeritaAcaraController::class, 'index']);
Route::get('admin/data/beritaacara/create', [BeritaAcaraController::class, 'tambah']);
Route::post('admin/data/beritaacara/create', [BeritaAcaraController::class, 'simpan']);
Route::get('admin/data/beritaacara/edit/{id}', [BeritaAcaraController::class, 'edit']);
Route::post('admin/data/beritaacara/edit/{id}', [BeritaAcaraController::class, 'update']);
Route::get('admin/data/beritaacara/delete/{id}', [BeritaAcaraController::class, 'hapus']);
