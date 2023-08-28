<?php

namespace App\Http\Controllers;

use App\Models\laporan_kegiatan;
use Illuminate\Http\Request;

class LaporanKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan_kegiatan::all();
        return view('laporan_kegiatan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan_kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'laporan_kegiatan' => 'required',
            'nama_kegiatan' => 'required',
            'tanggal' => 'required'
        ]);
        Laporan_kegiatan::create([
            'laporan_kegiatan' => $request->laporan_kegiatan,
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal
        ]);
        return redirect()->route('laporankegiatan.index')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
    }

    /**
     * Display the specified resource.
     */
    public function show(laporan_kegiatan $laporan_kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(laporan_kegiatan $laporan_kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, laporan_kegiatan $laporan_kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(laporan_kegiatan $laporan_kegiatan)
    {
        //
    }
}
