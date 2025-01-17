<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onboardingprivate;

class obprivatecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $onboardingprivate = onboardingprivate::all();
        return view('home.onboardingprivate.index', compact('onboardingprivate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.onboardingprivate.tambah');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $onboardingprivate = onboardingprivate::create([
            'nomor_form' => $request->nomor_form,
            'nama' => $request->nama,
            'nis_nim_nip' => $request->nis_nim_nip,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            'kategori_peserta' => $request->kategori_peserta,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'nilai_psikotes' => $request->nilai_psikotes,
            'nilai_wawancara' => $request->nilai_wawancara,
            'hasil_seleksi' => $request->hasil_seleksi,
            'nomor_surat_konfirmasi' => $request->nomor_surat_konfirmasi,
            'tanggal_surat_konfirmasi' => $request->tanggal_surat_konfirmasi,
            'link_surat_konfirmasi' => $request->link_surat_konfirmasi,
        ]);
        return redirect('/onboardingprivate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $onboardingprivate = onboardingprivate::find();
        return view('home.onboardingprivate.edit', compact('onboardingprivate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $onboardingprivate = onboardingprivate::findOrFail($id); // Cari data berdasarkan ID
        return view('home.onboardingprivate.edit        ', compact('onboardingprivate')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari data onboardingprivate berdasarkan ID
    $onboardingprivate = onboardingprivate::findOrFail($id);

    // Validasi input
    $request->validate([
        'nomor_form' => 'required',
        'nama' => 'required',
        'nis_nim_nip' => 'required',
        'kompetensi_keahlian' => 'required',
        'kategori_peserta' => 'required',
        'tanggal_pengajuan' => 'required',
        'tanggal_mulai' => 'required',
        'tanggal_berakhir' => 'required',
        'nilai_psikotes' => 'required',
        'nilai_wawancara' => 'required',
        'hasil_seleksi' => 'required',
        'nomor_surat_konfirmasi' => 'required',
        'tanggal_surat_konfirmasi' => 'required',
        'link_surat_konfirmasi' => 'required',
    ]);

    // Update data onboardingprivate
    $onboardingprivate->update($request->all());

    // Redirect ke halaman /onboardingprivate dengan pesan sukses
    return redirect('/onboardingprivate')->with('success', 'Data berhasil diperbarui!');

    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $onboardingprivate = onboardingprivate::find ($id);
        $onboardingprivate = onboardingprivate::findOrFail($id);
        $onboardingprivate->delete();
        // return redirect('/onboardingprivate');
        return redirect('/onboardingprivate')->with('success', 'Data berhasil dihapus!');

    }
}
