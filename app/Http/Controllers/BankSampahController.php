<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use App\Models\JadwalPengambilanSampah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BankSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('bank_sampah.index');
    }

    public function jadwal()
    {
        $jadwals = JadwalPengambilanSampah::all();
        return view('bank_sampah.jadwal', compact('jadwals'));
    }

    public function data()
    {
        $bank = BankSampah::all();
        return view('bank_sampah.bank', compact('bank'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan_warga.inputdatasampah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'berat' => 'required',
            'pendapatan' => 'required',
            'tanggal' => 'required',

        ]);
        BankSampah::create([
            'nama' => $request->nama,
            'berat' => $request->berat,
            'pendapatan' => $request->pendapatan,
            'tanggal' => Carbon::now(),
        ]);
        return redirect()->route('kegiatan_warga.index')->with('success', 'Input anda berhasil');
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
