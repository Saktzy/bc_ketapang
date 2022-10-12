<?php

namespace App\Http\Controllers;
use App\Models\Iklan;

class IklanController extends Controller{

    function index(){
        $data['list_iklan'] = Iklan::all();
        return view('admin.iklan.index', $data);
    }
    function create()
    {
        return view('admin.iklan.create');
    }
    function store()
    {
        $iklan = new Iklan();
        $iklan->nama = request('nama');
        $iklan->handleUploadFoto();
        $iklan->deskripsi = request('deskripsi');
        $iklan->save();

        return redirect('iklan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Iklan $iklan)
    {
        $data['iklan'] =  $iklan;
        return view('admin.iklan.edit', $data);
    }
    function show($iklan)
    {
        $data['iklan'] = Iklan::find($iklan);
        return view('admin.iklan.show', $data);
    }
    function update(Iklan $iklan)
    {
        $iklan->nama = request('nama');
        $iklan->handleUploadFoto();
        $iklan->deskripsi = request('deskripsi');
        $iklan->save();
        return redirect('iklan')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Iklan $iklan)
    {
        $iklan->delete();

        return redirect('iklan')->with('danger', 'Data Berhasil Dihapus');
    }

}
