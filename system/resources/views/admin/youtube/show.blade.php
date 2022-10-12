@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ url('public', $youtube->foto) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Edit Data Youtube
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h4>{{ $youtube->nama }}</h4>
                                    <hr>
                                    <p>
                                        {!! nl2br($youtube->deskripsi) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
