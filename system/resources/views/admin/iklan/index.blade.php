@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-start">Data Iklan</h5>
                        <a href="{{ url('iklan/create') }}" class="btn btn-dark float-end"><i class="fa fa-plus"></i> Tambah
                            Iklan</a>
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
                                @foreach ($list_iklan as $iklan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('iklan', $iklan->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('iklan', $iklan->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('admin.utils.delete', [
                                                    'url' => url('iklan', $iklan->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $iklan->nama }}</td>
                                        <td>{{ $iklan->deskripsi }}</td>
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
