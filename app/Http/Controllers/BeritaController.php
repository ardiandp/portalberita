<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
       // return view('berita', compact('berita'));
        return response()->json($berita);
    }

    public function store (Request $request)
    {
        $berita = new Berita();
        $berita->judul = $data['judul'];
        $berita->isi = $data['isi'];
        $berita->penulis = $data['penulis'];
        $berita->tanggal = $data['tanggal'];

        $berita->save();
        return response()->json($berita);
    }
}
