<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterDBController extends Controller
{
    public function index_page()
    {
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');
        $jumlah = DB::table('pagecounter')->where('ID', 1)->value('Jumlah');
        return view('index_page', ['jumlah' => $jumlah]);
    }
}
