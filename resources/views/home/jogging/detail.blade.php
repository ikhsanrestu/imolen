@extends('layouts.master')
@section('title', 'Kegiatan jogging Rutin')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card" style="margin-left: 21px; margin-right: 21px">
                <div class="card-header">
                    {{-- <a href="/jogging/form" class="btn btn-primary">Lihat Form Presensi</a>
                    <br><br> --}}
                    <h6>Berikut data peserta jogging :</h6>
                </div>
                <div class="row">
                <div class="card-body">
                     <h2>{{$jogging->nama}}</h2>
                            {{-- <p style="margin-bottom: 5px">{{$barangKeluar->created_at}}</p>
                            <hr style="border: none; border-top: 2px solid #dee2e6; margin: 10px 0;">
                            <p>Jumlah : {{$barangKeluar->jumlah}}</p>
                            <p>Harga : Rp. {{ number_format($barangKeluar->barang->harga_beli)}}</p>
                            <p>Supplier : {{$barangKeluar->nama_customer}}</p>
                            <br>
                            <h3>Total : Rp. {{ number_format($barangKeluar->jumlah * $barangKeluar->barang->harga_beli)}}</h3>
                            <br>
                            <a class="btn btn-info" href="/barang_keluar">Kembali</a> --}}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection


