<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use DataTables;

class BeritaController extends Controller
{
    public function index()
    {
      return view ('berita.index');
    }

    public function getBerita()
    {
        $berita = Berita::select(['judul', 'isi', 'penulis', 'tanggal']);
    //dd($berita->get()); // Debugging
    return Datatables::of($berita)->make(true);
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
