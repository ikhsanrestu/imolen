@extends('layouts.master')
@section('title', 'Kegiatan Dhuha Rutin')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/dhuha/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br>
                    <h6>Berikut data dhuha :</h6>
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
                            @foreach ($dhuha as $dhuha)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dhuha->id_presensi}}</td>
                                <td>{{$dhuha->nama}}</td>
                                <td>{{$dhuha->created_at}}</td>
                                <td > <span class="badge bg-success" > {{$dhuha->presensi}} </span> </td>
                                {{-- <td>
                                    <a href="/dhuha/{{$dhuha->id}}/detail" class="btn btn-secondary   ">Detail</a>
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
