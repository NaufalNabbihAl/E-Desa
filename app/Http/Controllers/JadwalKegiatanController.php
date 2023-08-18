<?php

namespace App\Http\Controllers;

use App\Models\jadwalKegiatan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = jadwalKegiatan::all();
        return view('jadwal_kegiatan.index', compact(['jadwal']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal_kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelaksana' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
            'waktuSelesai' => 'required',
            'pembahasan' => 'required',
        ]);
        jadwalKegiatan::create([
            'pelaksana' => $request->pelaksana,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'waktuSelesai' => $request->waktuSelesai,
            'pembahasan' => $request->pembahasan
        ]);
        return redirect()->route('jadwal_kegiatan.index')->with('success', 'Input anda berhasil');
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
