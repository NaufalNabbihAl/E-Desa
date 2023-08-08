<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $warga = Warga::where('NIK', Auth::user()->NIK)->first();
        return view('warga.edit', ['warga' => $warga]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $warga = Warga::where('NIK', Auth::user()->NIK)->first();
        $request->validate([
            'nama' => 'required',
            'tempat_tgl' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'pekerjaan_sekolah' => 'required',
            'pekerjaanOrtu'  => 'required',
            'jalan' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'rt' => 'required',
            'rw' => 'required'
        ]);
        $warga->update($request->all());
        return redirect()->route('warga.edit')->with('success', 'Anda Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
    {
        $search = $request->search;

        $warga = Warga::where(function ($query) use ($search) {
            $query->where('NIK', 'LIKE', '%' . $search . '%')->get();
        });

        return redirect()->route('desa.index', compact('warga'));
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        Warga::where('id', $id)->delete();
        return redirect()->route('umkm.index')->with('success', 'Berhasil Menghapus Pengajuan UMKM');
    }
}
