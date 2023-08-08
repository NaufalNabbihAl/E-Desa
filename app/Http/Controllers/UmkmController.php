<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::all();
        return view('umkm.index', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nowa' => 'required',
            'deskripsi' => 'required',
            'linkTP' => 'required',
            'linkSP' => 'required',
            'gambar' => 'required'
        ]);
        $gambar  = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('upload/umkm/gambar'), $gambarName);

        Umkm::create([
            'NIK' => Auth::user()->NIK,
            'nama' => $request->nama,
            'nowa' => $request->nowa,
            'deskripsi' => $request->deskripsi,
            'linkTP' => $request->linkTP,
            'linkSP' => $request->linkSP,
            'gambar' => $gambarName,
            'tanggal' => Carbon::now()
        ]);

        return redirect()->route('umkm.index')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
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
        $umkm = Umkm::where('id', $id)->first();
        return view('umkm.edit', ['umkm' => $umkm]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $umkm = Umkm::where('id', $request->id)->first();

        $request->validate([
            'nama' => 'required',
            'nowa' => 'required',
            'deskripsi' => 'required',
            'linkTP' => 'required',
            'linkSP' => 'required',
        ]);

        if ($request->file('gambar')) {
            Storage::delete('upload/umkm/gambar/' . $umkm->gambar);
            $gambar  = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('upload/umkm/gambar'), $gambarName);
            $umkm->gambar = $gambarName;
        }

        $umkm->nama = $request->nama;
        $umkm->nowa = $request->nowa;
        $umkm->deskripsi = $request->deskripsi;
        $umkm->linkTP = $request->linkTP;
        $umkm->linkSP = $request->linkSP;
        $umkm->save();

        return redirect()->route('umkm.index')->with('success', 'Anda Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Umkm::where('id', $id)->delete();
        return redirect()->route('umkm.index')->with('success', 'Berhasil Menghapus Pengajuan UMKM');
    }
}
