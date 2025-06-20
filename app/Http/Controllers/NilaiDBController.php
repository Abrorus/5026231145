<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiDBController extends Controller
{
    public function indexnilai()
    {
    	// mengambil data dari table Nilai
    	// $nilai = DB::table('nilai')->get(); //returnya array all record
    	$nilai = DB::table('nilai')->get();

    	// mengirim data nilai ke view indexnilai
    	return view('indexnilai',['nilai' => $nilai]);

    }

    public function tambahdatanilai()
{

	// memanggil view tambahnilai
	return view('tambahdatanilai');

}
// method untuk insert data ke table nilai
public function store(Request $request)
{
	// insert data ke table nilai
	DB::table('nilai')->insert([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman nilai
	return redirect('/nilai');

}

// update data mouse
public function update(Request $request)
{
	// update data mouse
	DB::table('nilai')->where('id',$request->id)->update([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman mouse
	return redirect('/nilai');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table nilai sesuai pencarian data
		$nilai = DB::table('nilai')
		->where('normorinduksiswa','like',"%".$cari."%")
        ->where('nilaiangka','like',"%".$cari."%");

    		// mengirim data nilai ke view indexnilai
		return view('indexnilai',['nilai' => $nilai]);

	}

}
