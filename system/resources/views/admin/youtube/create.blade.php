@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-start">Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('youtube') }}" method="post">
                            @csrf
                            <div class="form-grup">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grup">
                                        <label for="" class="control-label">link</label>
                                        <input type="text" class="form-control" name="link">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
