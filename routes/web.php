<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MouseDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterDBController;
use App\Http\Controllers\NilaiDBController;

// import java.io; (sama kayak use)

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('kedua', function () {
	return view('kedua');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('tugaslayout', function () {
	return view('tugaslayout');
});

Route::get('tugaslinktree5', function () {
	return view('tugaslinktree5');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('tugasvideoDropdown', function () {
	return view('tugasvideoDropdown');
});

Route::get('tugasvideogridview', function () {
	return view('tugasvideogridview');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('template', function () {
	return view('template');
});

Route::get('Dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
Route::get('/pegawai/cari','PegawaiController@cari');

// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);

Route::get('/mouse', [MouseDBController::class,'indexmouse']);
Route::get('/mouse/tambahmouse', [MouseDBController::class,'tambahmouse']);
Route::post('/mouse/store', [MouseDBController::class,'store']);
Route::get('/mouse/edit/{id}', [MouseDBController::class,'editmouse']);
Route::post('/mouse/update',[MouseDBController::class,'update']);
Route::get('/mouse/hapus/{id}',[MouseDBController::class,'hapus']);
Route::get('/mouse/cari',[MouseDBController::class,'cari']);

Route::get('/karyawan', [KaryawanDBController::class,'indexkaryawan']);
Route::get('/karyawan/tambahkaryawan', [KaryawanDBController::class,'tambahkaryawan']);
Route::post('/karyawan/store', [KaryawanDBController::class,'store']);
Route::get('/karyawan/hapus/{id}',[KaryawanDBController::class,'hapus']);
Route::get('/karyawan/cari',[KaryawanDBController::class,'cari']);

Route::get('/pagecounter', [PageCounterDBController::class,'index_page']);

Route::get('/eas', [NilaiDBController::class,'indexnilai']);
Route::get('/eas/tambahdatanilai', [NilaiDBController::class,'tambahdatanilai']);
Route::post('/eas/store', [NilaiDBController::class,'store']);

