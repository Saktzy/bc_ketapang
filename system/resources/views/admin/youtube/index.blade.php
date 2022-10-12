@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-start">Data Video Youtube</h5>
                        <a href="{{ url('youtube/create') }}" class="btn btn-dark float-end"><i class="fa fa-plus"></i> Tambah
                            Video Youtube</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>deskripsi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_youtube as $youtube)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('youtube', $youtube->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('youtube', $youtube->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('admin.utils.delete', [
                                                    'url' => url('youtube', $youtube->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $youtube->nama }}</td>
                                        <td>{{ $youtube->deskripsi }}</td>
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
