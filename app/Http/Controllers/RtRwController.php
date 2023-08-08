<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\WajibLapor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RtRwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.rt&rw.index');
    }

    public function laporantamu()
    {
        $lapor = WajibLapor::all();
        return view('admin.rt&rw.laporantamu', compact('lapor'));
    }

    public function pengumumanStore(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);
        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => Carbon::now(),
        ]);
        return redirect()->route('rtrw.index')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
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
        //
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
    public function edit()
    {
        return view('admin.rt&rw.edit');
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
