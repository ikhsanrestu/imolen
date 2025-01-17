@extends('layouts.master')
@section('title', 'Kegiatan Safety Induction')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/saction/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br>
                    <h6>Berikut data Safety Induction :</h6>
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
                            @foreach ($saction as $saction)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$saction->id_presensi}}</td>
                                <td>{{$saction->nama}}</td>
                                <td>{{$saction->created_at}}</td>
                                <td >{{$saction->presensi}}</td>
                                {{-- <td>
                                    <a href="/saction/{{$saction->id}}/detail" class="btn btn-secondary   ">Detail</a>
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
