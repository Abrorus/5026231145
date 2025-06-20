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
//Belajar UAS PWEB
// yang harus diubah ketika masuk ke laravel ini untuk uas
// - buat database sesuai soal yang diminta di dbeaver (dummy)
// - buat controller sesuai namanya yang di soal
// - masukkan controller ke web.php dan juga route nya
// - buat file index sesuai nama yang tekah ditentukan di soal
// - tambahkan/ edit di bagian template.blade php untuk mengintegrasikan semua
// - buat fitur yang dimau disesuaikan saja, bisa edit, hapus, cari atau tambah
// - untuk edit dan tambah kita bikin file nya baru
// -  untuk hapus cari kita cukup inisiasikan di index dan controller.
// - gunakan laravel tutor malas ngoding untuk lebih lanjut.

// - contoh bikin tabel baru di dbeaver
// CREATE TABLE mouse (
   // mouse_ID INT AUTO_INCREMENT PRIMARY KEY,
    //merkmouse VARCHAR(25) NOT NULL,
    //hargamouse INT NOT NULL,
    //tersedia BOOLEAN NOT NULL,
    //berat FLOAT
//);
//INSERT INTO mouse (merkmouse, hargamouse, tersedia, berat) VALUES
// ('Logitech G Pro X', 1200000, TRUE, 0.063),
