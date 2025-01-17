@extends('layouts.master')
@section('title','Edit Data Onboarding (Private)')
@section('content')

<div class="section">
    <div class="col-12col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                <a href="/onboardingprivate" class="btn btn-primary">Kembali</a>
            </div>
             <div class="card-body">
                <form action="{{ route('onboardingprivate.update', $onboardingprivate->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
                    <label for="nomor_form" class="form-label">Nomor Form</label>
                    <input
                        type="number"
                        class="form-control"
                        name="nomor_form"
                        value="{{$onboardingprivate->nomor_form}}"
                        id="nomor_form"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nama"
                        value="{{$onboardingprivate->nama}}"
                        id="nama"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="nis_nim_nip" class="form-label">NIS/NIM/NIP</label>
                    <input
                        type="number"
                        class="form-control"
                        name="nis_nim_nip"
                        value="{{$onboardingprivate->nis_nim_nip}}"
                        id="nis_nim_nip"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                    <input
                        type="text"
                        class="form-control"
                        name="kompetensi_keahlian"
                        value="{{$onboardingprivate->kompetensi_keahlian}}"
                        id="kompetensi_keahlian"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="kategori_peserta" class="form-label">Kategori Peserta</label>
                    <select id="kategori_peserta" class="form-control" name="kategori_peserta">
                        <option value="PKL" {{ $onboardingprivate->kategori_peserta == 'PKL' ? 'selected' : '' }}>PKL</option>
                        <option value="KP" {{ $onboardingprivate->kategori_peserta == 'KP' ? 'selected' : '' }}>KP</option>
                        <option value="TA" {{ $onboardingprivate->kategori_peserta == 'TA' ? 'selected' : '' }}>TA</option>
                    </select>
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
                    <input
                        type="date"
                        class="form-control"
                        name="tanggal_pengajuan"
                        value="{{$onboardingprivate->tanggal_pengajuan}}"
                        id="tanggal_pengajuan"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input
                        type="date"
                        class="form-control"
                        name="tanggal_mulai"
                        value="{{$onboardingprivate->tanggal_mulai}}"
                        id="tanggal_mulai"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                    <input
                        type="date"
                        class="form-control"
                        name="tanggal_berakhir"
                        value="{{$onboardingprivate->tanggal_berakhir}}"
                        id="tanggal_berakhir"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="nilai_psikotes" class="form-label">Nilai Psikotes</label>
                    <input
                        type="number"
                        class="form-control"
                        name="nilai_psikotes"
                        value="{{$onboardingprivate->nilai_psikotes}}"
                        id="nilai_psikotes"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="nilai_wawancara" class="form-label">Nilai Wawancara</label>
                    <input
                        type="number"
                        class="form-control"
                        name="nilai_wawancara"
                        value="{{$onboardingprivate->nilai_wawancara}}"
                        id="nilai_wawancara"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="hasil_seleksi" class="form-label">Hasil Seleksi</label>
                    <select id="hasil_seleksi" class="form-control" name="hasil_seleksi">
                        <option value="lulus" {{ $onboardingprivate->hasil_seleksi == 'lulus' ? 'selected' : '' }}>Lulus</option>
                        <option value="tidak_lulus" {{ $onboardingprivate->hasil_seleksi == 'tidak_lulus' ? 'selected' : '' }}>Tidak Lulus</option>
                    </select>
                    <small id="helpId" class="form-text text-muted"></small>
                    {{-- <input
                        type="text"
                        class="form-control"
                        name="hasil_seleksi"
                        value="{{$onboardingprivate->hasil_seleksi}}"
                        id="hasil_seleksi"
                        aria-describedby="helpId"
                        placeholder=""
                    /> --}}
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Surat Konfirmasi</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nomor_surat_konfirmasi"
                        value="{{$onboardingprivate->nomor_surat_konfirmasi}}"
                        id="nomor_surat_konfirmasi"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="tanggal_surat_konfirmasi" class="form-label">Tanggal Surat Konfirmasi</label>
                    <input
                        type="date"
                        class="form-control"
                        name="tanggal_surat_konfirmasi"
                        value="{{$onboardingprivate->tanggal_surat_konfirmasi}}"
                        id="tanggal_surat_konfirmasi"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                    <label for="link_surat_konfirmasi" class="form-label">Link Surat Konfirmasi</label>
                    <input
                        type="text"
                        class="form-control"
                        name="link_surat_konfirmasi"
                        value="{{$onboardingprivate->link_surat_konfirmasi}}"
                        id="link_surat_konfirmasi"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>







@endsection