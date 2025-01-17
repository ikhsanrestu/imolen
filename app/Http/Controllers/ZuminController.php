<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zumin;

class ZuminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $zumin = zumin::all();
        return view("home.zumin.index", compact("zumin"));
    }
    public function showForm()
    {
        return view('home.zumin.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_presensi' => 'required|string|max:255',
            'nama' => 'required|string|max:255', // Ganti 'email' dengan 'string'
            'tanggal' => 'required|date',        // Ganti 'string' dengan 'date'
            'presensi' => 'required|string|max:15',
        ]);

        zumin::create([
            'id_presensi' => $validated['id_presensi'],
            'nama' => $validated['nama'],
            'tanggal' => $validated['tanggal'],
            'presensi' => $validated['presensi'],
        ]);

        return redirect('/zumin');

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
    public function detail(string $id)
    {
        $zumin = zumin::find($id);
        return view("home.zumin.detail", compact("zumin"));
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
