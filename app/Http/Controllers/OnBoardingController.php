<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onboarding;

class OnBoardingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $onboarding = OnBoarding::all();
        return view('home.onboarding.index',compact('onboarding'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.onboarding.tambah');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $onboarding = OnBoarding::create([
            'nama' => $request-> nama,
            'jurusan' => $request-> jurusan,
            'nomor_telepon' => $request-> nomor_telepon,
            'asal_instansi' => $request-> asal_instansi,
            'tanggal_mulai' => $request-> tanggal_mulai,
            'tanggal_berakhir' => $request-> tanggal_berakhir,
        ]);
        return redirect('/onboarding');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $onboarding = OnBoarding::find($id);
        return view('home.onboarding.edit', compact('onboarding'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $onboarding = OnBoarding::findOrFail($id); // Temukan berdasarkan ID
        return view('home.onboarding.edit', compact('onboarding')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'asal_instansi' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        // Temukan data yang ingin diupdate
        $onboarding = OnBoarding::findOrFail($id);
        $onboarding->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'nomor_telepon' => $request->nomor_telepon,
            'asal_instansi' => $request->asal_instansi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ]);

        return redirect('/onboarding')->with('success', 'Data berhasil diperbarui!');


        // $onboarding = OnBoarding::find($id);
        // $onboarding->update([
        //     'nama' => $request-> nama,
        //     'jurusan' => $request-> jurusan,
        //     'nomor_telepon' => $request-> nomor_telepon,
        //     'asal_instansi' => $request-> asal_instansi,
        //     'tanggal_mulai' => $request-> tanggal_mulai,
        //     'tanggal_berakhir' => $request-> tanggal_berakhir,
        // ]);
        // return redirect('/onboarding')->with('succsess', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Temukan data yang akan dihapus
         $onboarding = OnBoarding::findOrFail($id);
         $onboarding->delete();
 
         return redirect('/onboarding')->with('success', 'Data berhasil dihapus!');
        // $onboarding = OnBoarding::findOrFail($id);
        // $onboarding->delete();

        // return redirect('/onboarding')->with('success', 'Data berhasil dihapus!');
    }
}
