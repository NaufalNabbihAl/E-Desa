<?php

namespace App\Http\Controllers;

use App\Models\Laporan_keuangan;
use App\Models\Pengumuman;
use App\Models\User;
use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desa = Warga::all();
        return view('admin.desa.index', compact('desa'));
    }

    public function pengumuman()
    {
        return view('admin.desa.pengumuman');
    }

    public function laporankeuangan()
    {
        $laporan = Laporan_keuangan::all();
        return view('admin.desa.laporankeuangan', compact('laporan'));
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
        return redirect()->route('desa.pengumuman')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function tambahdatawarga()
    {
        return view('admin.desa.tambahdatawarga');
    }

    public function tambahdatalaporankeuangan()
    {
        return view('admin.desa.tambahdatalaporankeuangan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required',
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

        User::create([
            'NIK' => $request->NIK,
            'password' => $request->NIK,
            'role' => 'warga',
        ]);

        Warga::create([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'tempat_tgl' => $request->tempat_tgl,
            'umur' => $request->umur,
            'jk' => $request->jk,
            'pekerjaan_sekolah' => $request->pekerjaan_sekolah,
            'pekerjaanOrtu' => $request->pekerjaanOrtu,
            'jalan' => $request->jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'rt' => $request->rt,
            'rw' => $request->rw
        ]);
        return redirect()->route('desa.index');
    }

    public function storeLaporan(Request $request)
    {
        $request->validate([
            'noSurat' => 'required',
            'nama' => 'required',
            'file' => 'required'
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/laporanKeuangan'), $fileName);

        Laporan_keuangan::create([
            'noSurat' => $request->noSurat,
            'nama' => $request->nama,
            'jenis_dokumen' => $request->file->getClientOriginalExtension(),
            'tanggal' => Carbon::now(),
            'file' => $fileName,
        ]);
        return redirect()->route('desa.laporankeuangan')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
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
