<?php

namespace App\Http\Controllers;

use App\Models\WajibLapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WajibLaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wajib_lapor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'terlapor' => 'required',
            'ktp' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        $ktp = $request->file('ktp');
        $ktpName = time() . '.' . $ktp->getClientOriginalExtension();
        $ktp->move(public_path('upload/wajibLapor/ktp'), $ktpName);

        WajibLapor::create([
            'NIK' => Auth::user()->NIK,
            'terlapor' => $request->terlapor,
            'ktp' => $ktpName,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('wajib_lapor.index')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
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
