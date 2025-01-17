@extends('layouts.master')
@section('title', 'Kegiatan Zumba Jumat Rutin')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/zumat/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br>
                    <h6>Berikut data Peserta Zumba Jumat :</h6>
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
                            @foreach ($zumat as $zumat)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$zumat->id_presensi}}</td>
                                <td>{{$zumat->nama}}</td>
                                <td>{{$zumat->created_at}}</td>
                                <td >{{$zumat->presensi}}</td>
                                {{-- <td>
                                    <a href="/zumat/{{$zumat->id}}/detail" class="btn btn-secondary   ">Detail</a>
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
