@extends('layouts.master')
@section('title', 'Peserta Aktif')
@section('content')

<div class="section">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h6>Tambah data peserta aktif :</h6>
                </div>
                <div class="card-body">

                    <form action="/paktif/simpan" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">ID Presensi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_presensi"
                                id="id_presensi"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">No ID Card</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_card"
                                id="id_card"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Status Keaktifan</label>
                            <select required name="status_kekatifan" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Pilih</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Status Kepesertaan</label>
                            <select required name="status_kepesertaan" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Pilih</option>
                                <option value="PKL">PKL</option>
                                <option value="KP">KP</option>
                                <option value="TA">TA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select required name="jk" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">No Telephone</label>
                            <input
                                type="number"
                                class="form-control"
                                name="notelp"
                                id="notelp"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Asal Instansi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="asal_instansi"
                                id="asal_instansi"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">NIS/NIM</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nis_nim"
                                id="nis_nim"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Kompetensi Program Studi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="kompetensi_programstudi"
                                id="kompetensi_programstudi"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Periode Awal</label>
                            <input
                                type="date"
                                class="form-control"
                                name="periode_awal"
                                id="periode_awal"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Periode Akhir</label>
                            <input
                                type="date"
                                class="form-control"
                                name="periode_akhir"
                                id="periode_akhir"
                                placeholder=""
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Gedung Penempatan </label>
                            <input
                                type="text"
                                class="form-control"
                                name="gedung_penempatan"
                                id="gedung_penempatan"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pembimbing Perusahaan </label>
                            <input
                                type="text"
                                class="form-control"
                                name="pembimbing_perusahaan"
                                id="pembimbing_perusahaan"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Unit Penempatan </label>
                            <input
                                type="text"
                                class="form-control"
                                name="unit_penempatan"
                                id="unit_penempatan"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Pekerjaan </label>
                            <input
                                type="text"
                                class="form-control"
                                name="jenis_pekerjaan"
                                id="jenis_pekerjaan"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Reguler/MSIB/Magenta</label>
                            <select required name="reguler_msib_magenta" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Pilih</option>
                                <option value="Reguler">Reguler</option>
                                <option value="MSIB">MSIB</option>
                                <option value="Magenta">Magenta</option>
                            </select>
                        </div>

                        <a href="/paktif" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>





@endsection


