<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //

    public function index()
    {
        return view('beranda');
    }

    public function getBerita()
    {
        $berita = Berita::select(['judul', 'isi', 'penulis', 'tanggal']);
        return Datatables::of($berita)->make(true);
    }
}
