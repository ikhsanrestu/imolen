@extends('layouts.master')
@section('title', 'Kegiatan jogging Rutin')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/jogging/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br>
                    <h6>Berikut data jogging :</h6>
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
                            @foreach ($jogging as $jogging)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$jogging->id_presensi}}</td>
                                <td>{{$jogging->nama}}</td>
                                <td>{{$jogging->created_at}}</td>
                                <td >{{$jogging->presensi}}</td>
                                {{-- <td>
                                    <a href="/jogging/{{$jogging->id}}/detail" class="btn btn-secondary   ">Detail</a>
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
