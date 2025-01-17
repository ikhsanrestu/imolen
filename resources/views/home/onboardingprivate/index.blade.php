@extends('layouts.master')
@section('title', 'Data Onboarding (Private)')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">

                    <a href="/onboardingprivate/tambah" class="btn btn-primary">Tambah Data Admin</a>
                    <br><br>
                    <h6>Berikut data admin :</h6>
                </div>
                <div class="card-body">

                    <table class="table table-stripped " id="table1">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nomor Form</th>
                                <th>Nama</th>
                                <th>NIS/NIM/NIP</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Katengori Peserta</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal Mulai</th>  
                                <th>Tanggal Berakhir</th>
                                <th>Nilai Psikotes</th>
                                <th>Nilai Wawancara</th>
                                <th>Hasil Seleksi</th>
                                <th>Nomor Surat Konfirmasi</th>
                                <th>Tanggal Surat Konfirmasi</th>
                                <th>Link Surat Konfirmasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($onboardingprivate as $onboardingprivate)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$onboardingprivate->nomor_form}}</td>
                                <td>{{$onboardingprivate->nama}}</td>
                                <td>{{$onboardingprivate->nis_nim_nip}}</td>
                                <td>{{$onboardingprivate->kompetensi_keahlian}}</td>
                                <td>{{$onboardingprivate->kategori_peserta}}</td>
                                <td>{{$onboardingprivate->tanggal_pengajuan}}</td>  
                                <td>{{$onboardingprivate->tanggal_mulai}}</td>
                                <td>{{$onboardingprivate->tanggal_berakhir}}</td>
                                <td>{{$onboardingprivate->nilai_psikotes}}</td>
                                <td>{{$onboardingprivate->nilai_wawancara}}</td>
                                <td>{{$onboardingprivate->hasil_seleksi}}</td>
                                <td>{{$onboardingprivate->nomor_surat_konfirmasi}}</td>
                                <td>{{$onboardingprivate->tanggal_surat_konfirmasi}}</td>
                                <td>{{$onboardingprivate->link_surat_konfirmasi}}</td>
                                <td>
                                    {{-- <a href="/onboardingprivate/{{$onboardingprivate->id}}/edit" class="btn btn-warning">Edit</a> --}}
                                    <a href="/onboardingprivate/{{$onboardingprivate->id}}/edit" class="btn btn-warning">Edit</a>
                                    {{-- <a href="/onboardingprivate/{{$onboardingprivate->id}}/delete" class="btn btn-danger" onclick= "return confirm('Apa anda yakin akan menghapus data?')">Hapus</a> --}}
                                    <form action="{{ route('onboardingprivate.destroy', $onboardingprivate->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa Anda yakin akan menghapus data?')">Hapus</button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>


                </div>
            </div>
        </div>
    </div>
</div>





@endsection