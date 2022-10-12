@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-start">Data Berita</h5>
                        <a href="{{ url('berita/create') }}" class="btn btn-dark float-end"><i class="fa fa-plus"></i> Tambah
                            berita</a>
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>deskripsi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_berita as $berita)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('berita', $berita->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('berita', $berita->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('admin.utils.delete', [
                                                    'url' => url('berita', $berita->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $berita->nama }}</td>
                                        <td>{{ $berita->deskripsi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
