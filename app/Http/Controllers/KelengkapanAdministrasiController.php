<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelengkapanAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelengkapanadministrasi = KelengkapanAdministrasi::all();
        return view('home.kelengkapanadministrasi.index',compact('kelengkapanadministrasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.kelengkapanadministrasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelengkapanadministrasi = KelengkapanAdministrasi::find();
        return view('home.kelengkapanadministrasi.edit', compact('kelengkapanadministrasi'));
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
        $kelengkapanadministrasi = KelengkapanAdministrasi::find ($id);
        $kelengkapanadministrasi->delete();
        return redirect('/kelengkapanadministrasi');
    }
}
