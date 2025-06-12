<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseDBController extends Controller
{
    public function indexmouse()
    {
    	// mengambil data dari table mouse
    	// $mouse = DB::table('mouse')->get(); //returnya array all record
    	$mouse = DB::table('mouse')->paginate(10);

    	// mengirim data mouse ke view indexmouse
    	return view('indexmouse',['mouse' => $mouse]);

    }

    public function tambahmouse()
{

	// memanggil view tambahmouse
	return view('tambahmouse');

}
// method untuk insert data ke table mouse
public function store(Request $request)
{
	// insert data ke table mouse
	DB::table('mouse')->insert([
		'merkmouse' => $request->merkmouse,
		'hargamouse' => $request->hargamouse,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman mouse
	return redirect('/mouse');

}
// method untuk editmouse data mouse
public function editmouse($id) //gapake request karena ada primary key
{
	// mengambil data mouse berdasarkan id yang dipilih
	$mouse = DB::table('mouse')
        ->where('mouse_ID',$id) //khusus operator =
        ->get();
	// passing data mouse yang didapat ke view editmouse.blade.php
	return view('editmouse',['mouse' => $mouse]);

}

// update data mouse
public function update(Request $request)
{
	// update data mouse
	DB::table('mouse')->where('mouse_ID',$request->id)->update([
		'merkmouse' => $request->merkmouse,
		'hargamouse' => $request->hargamouse,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
}

// method untuk hapus data mouse
public function hapus($id)
{
	// menghapus data mouse berdasarkan id yang dipilih
	DB::table('mouse')->where('mouse_ID',$id)->delete();

	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table mouse sesuai pencarian data
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%".$cari."%")
        ->where('hargamouse','like',"%".$cari."%")
		->paginate();

    		// mengirim data mouse ke view indexmouse
		return view('indexmouse',['mouse' => $mouse]);

	}

}
