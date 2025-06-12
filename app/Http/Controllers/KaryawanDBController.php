<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function indexkaryawan()
    {
    	// mengambil data dari table karyawan
    	// $karyawan = DB::table('karyawan')->get(); //returnya array all record
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view indexkaryawan
    	return view('indexkaryawan',['karyawan' => $karyawan]);

    }

    public function tambahkaryawan()
{

	// memanggil view tambahkaryawan
	return view('tambahkaryawan');

}
// method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');

}


// method untuk hapus data karyawan
public function hapus($id)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('kodepegawai','like',"%".$cari."%")
        ->where('namalengkap','like',"%".$cari."%")
        ->where('divisi','like',"%".$cari."%")
        ->where('departemen','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view indexkaryawan
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

}
