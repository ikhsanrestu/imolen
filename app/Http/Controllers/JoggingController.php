<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jogging;

class JoggingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $jogging = jogging::all();
        return view("home.jogging.index", compact("jogging"));
    }
    public function showForm()
    {
        return view('home.jogging.form');
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

        jogging::create([
            'id_presensi' => $validated['id_presensi'],
            'nama' => $validated['nama'],
            'tanggal' => $validated['tanggal'],
            'presensi' => $validated['presensi'],
        ]);

        return view('success');

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
        $jogging = jogging::find($id);
        return view("home.jogging.detail", compact("jogging"));
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
