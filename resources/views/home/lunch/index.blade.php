@extends('layouts.master')
@section('title', 'Kegiatan Makan Siang Rutin')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/lunch/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br>
                    <h6>Berikut data Makan Siang :</h6>
                </div>
                <div class="card-body">

                    <table class="table table-stripped " id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Presensi</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Presensi</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lunch as $lunch)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$lunch->id_presensi}}</td>
                                <td>{{$lunch->nama}}</td>
                                <td>{{$lunch->created_at}}</td>
                                <td >{{$lunch->presensi}}</td>
                                {{-- <td>
                                    <a href="/lunch/{{$lunch->id}}/detail" class="btn btn-secondary   ">Detail</a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>


                </div>
            </div>
        </div>
    </div>
</div>





@endsection
