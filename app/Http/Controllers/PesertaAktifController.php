<?php

namespace App\Http\Controllers;
use App\Models\PesertaAktif;

use Illuminate\Http\Request;

class PesertaAktifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PesertaAktif = PesertaAktif::all();
        return view("home.paktif.index", compact("PesertaAktif"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.paktif.tambah", );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // PesertaAktif::create([
        //     'id_presensi' => $request->id_presensi,
        //     'id_card' => $request->id_card,
        //     'status_kekatifan' => $request->status_kekatifan,
        //     'status_kepesertaan' => $request->status_kepesertaan,
        //     'nama' => $request->nama,
        //     'jk' => $request->jk,
        //     'notelp' => $request->notelp,
        //     'asal_instansi' => $request->asal_instansi,
        //     'nis_nim' => $request->nis_nim,
        //     'kompetensi_programstudi' => $request->kompetensi_programstudi,
        //     'periode_awal' => $request->periode_awal,
        //     'periode_akhir' => $request->periode_akhir,
        //     'gedung_penempatan' => $request->gedung_penempatan,
        //     'unit_penempatan' => $request->unit_penempatan,
        //     'jenis_pekerjaan' => $request->jenis_pekerjaan,
        //     'pembimbing_perusahaan' => $request->pembimbing_perusahaan , // Berikan nilai default
        //     'reguler_msib_magenta' => $request->reguler_msib_magenta
        // ]);


        $PesertaAktif= PesertaAktif::create($request->all());
        return redirect('/paktif')->with("success","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
