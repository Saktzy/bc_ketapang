<?php

namespace App\Http\Controllers;
use App\Models\Berita;

class BeritaController extends Controller{

    function index(){
        $data['list_berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }
    function create()
    {
        return view('admin.berita.create');
    }
    function store()
    {
        $berita = new Berita();
        $berita->nama = request('nama');
        $berita->handleUploadFoto();
        $berita->deskripsi = request('deskripsi');
        $berita->save();

        return redirect('berita')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Berita $berita)
    {
        $data['berita'] =  $berita;
        return view('admin.berita.edit', $data);
    }
    function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('admin.berita.show', $data);
    }
    function update(Berita $berita)
    {
        $berita->nama = request('nama');
        $berita->handleUploadFoto();
        $berita->deskripsi = request('deskripsi');
        $berita->save();
        return redirect('berita')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect('berita')->with('danger', 'Data Berhasil Dihapus');
    }

}
