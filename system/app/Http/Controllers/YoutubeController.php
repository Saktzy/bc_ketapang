<?php

namespace App\Http\Controllers;
use App\Models\Youtube;

class YoutubeController extends Controller{

    function index(){
        $data['list_youtube'] = Youtube::all();
        return view('admin.youtube.index', $data);
    }
    function create()
    {
        return view('admin.youtube.create');
    }
    function store()
    {
        $youtube = new Youtube();
        $youtube->nama = request('nama');
        $youtube->link = request('link');
        $youtube->deskripsi = request('deskripsi');
        $youtube->save();

        return redirect('youtube')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Youtube $youtube)
    {
        $data['youtube'] =  $youtube;
        return view('admin.youtube.edit', $data);
    }
    function show($youtube)
    {
        $data['youtube'] = Youtube::find($youtube);
        return view('admin.youtube.show', $data);
    }
    function update(Youtube $youtube)
    {
        $youtube->nama = request('nama');
        $youtube->link = request('link');
        $youtube->deskripsi = request('deskripsi');
        $youtube->save();
        return redirect('youtube')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Youtube $youtube)
    {
        $youtube->delete();

        return redirect('youtube')->with('danger', 'Data Berhasil Dihapus');
    }

}
