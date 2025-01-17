@extends('layouts.master')
@section('title', 'Peserta Aktif')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/paktif/tambah" class="btn btn-primary"> Tambah Data Peserta Aktif </a>
                    <br><br>
                    <h6>Berikut data peserta aktif :</h6>
                </div>
                <div class="card-body">

                    <table class="table table-stripped " id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Presensi</th>
                                <th>ID Card</th>
                                <th>Status Keaktifan</th>
                                <th>Status Kepesertaan</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telfon</th>
                                <th>Asal Istansi</th>
                                <th>NIS/NIM</th>
                                <th>Kompetensi Program Studi</th>
                                <th>Periode Awal</th>
                                <th>Periode Akhir</th>
                                <th>Gedung Penempatan</th>
                                <th>Pembimbing Perusahaan</th>
                                <th>Unit Penempatan</th>
                                <th>Jenis Pekerjaan</th>
                                <th>Reguler/MSIB/Magenta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PesertaAktif as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->id_presensi}}</td>
                                <td>{{$p->id_card}}</td>
                                <td>{{$p->status_kekatifan}}</td>
                                <td>{{$p->status_kepesertaan}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->jk}}</td>
                                <td>{{$p->notelp}}</td>
                                <td>{{$p->asal_instansi}}</td>
                                <td>{{$p->nis_nim}}</td>
                                <td>{{$p->kompetensi_programstudi}}</td>
                                <td>{{$p->periode_awal}}</td>
                                <td>{{$p->periode_akhir}}</td>
                                <td>{{$p->gedung_penempatan}}</td>
                                <td>{{$p->pembimbing_perusahaan}}</td>
                                <td>{{$p->unit_penempatan}}</td>
                                <td>{{$p->jenis_pekerjaan}}</td>
                                <td>{{$p->reguler_msib_magenta}}</td>
                            </tr>
                            @endforeach
                        </tbody>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
