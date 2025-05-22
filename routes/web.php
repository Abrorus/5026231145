<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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

Route::get('Dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
