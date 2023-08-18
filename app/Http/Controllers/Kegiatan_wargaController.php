<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use App\Models\jadwalKegiatan;
use App\Models\Umkm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Kegiatan_wargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::all();
        return view('admin.kegiatan_warga.index', compact('umkm'));
    }
    public function banksampah()
    {
        $bank = BankSampah::all();
        return view('admin.kegiatan_warga.banksampah', compact('bank'));
    }
    public function jadwalkegiatan()
    {
        $jadwal = jadwalKegiatan::all();
        return view('admin.kegiatan_warga.jadwalkegiatanwarga', compact('jadwal'));
    }

    public function Detailjadwalkegiatan($id)
    {
        $jadwal = jadwalKegiatan::where('id', $id)->first();
        return view('admin.kegiatan_warga.detailkegiatanwarga', ['jadwal' => $jadwal]);
    }
    public function Detailumkm($id)
    {
        $umkm = Umkm::where('id', $id)->first();
        return view('admin.kegiatan_warga.detailumkm', ['umkm' => $umkm]);
    }
    public function Updateumkm($request)
    {
        $umkm = Umkm::where('id', $request->id)->first();

        $request->validate([
            'nama' => 'required',
            'nowa' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'linkTP' => 'required',
            'linkSP' => 'required',
            'pemilik' => 'required',
        ]);

        $umkm->update([
            'nama' => $request->pelaksana,
            'nowa' => $request->Lokasi,
            'lokasi' => $request->waktu,
            'waktu' => $request->waktu,
            'waktuSelesai' => $request->waktuSelesai,
            'status' => $request->status,
            'pembahasan' => $request->pembahasan,
        ]);
        return redirect()->route('kegiatanWarga.update')->with('success', 'Anda Berhasil Mengubah Data');
    }

    public function Updatejadwalkegiatan(Request $request)
    {
        $jadwal = jadwalKegiatan::where('id', $request->id)->first();

        $request->validate([
            'pelaksana' => 'required',
            'Lokasi' => 'required',
            'waktu' => 'required',
            'waktuSelesai' => 'required',
            'status' => 'required',
            'pembahasan' => 'required',
        ]);

        $jadwal->update([
            'pelaksana' => $request->pelaksana,
            'Lokasi' => $request->Lokasi,
            'waktu' => $request->waktu,
            'waktuSelesai' => $request->waktuSelesai,
            'status' => $request->status,
            'pembahasan' => $request->pembahasan,
        ]);
        return redirect()->route('kegiatanWarga.update')->with('success', 'Anda Berhasil Mengubah Data');
    }
    public function Inputbanksampah()
    {
        return view('admin.kegiatan_warga.inputdatasampah');
    }
    public function banksampahStore()
    {
        return view('admin.kegiatan_warga.inputdatasampah', compact('bank'));
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
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('kegiatanWarga.banksampah')->with('success', 'Input anda berhasil');
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
