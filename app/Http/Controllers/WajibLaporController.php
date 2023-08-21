<?php

namespace App\Http\Controllers;

use App\Models\dataLaporan;
use App\Models\DataTamu;
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
    public function laporTamu()
    {
        return view('wajib_lapor.LaporTamu');
    }
    public function laporkan()
    {
        return view('wajib_lapor.Laporkan');
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
            'bukti' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'pulang' => 'required',
            'deskripsi' => 'required'
        ]);

        $WajibLapor = WajibLapor::create([
            'NIK' => Auth::user()->NIK,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'pulang' => $request->pulang,
            'deskripsi' => $request->deskripsi
        ]);

        foreach ($request->terlapor as $key => $value) {
            $data_tamu = new DataTamu();
            $data_tamu->wajib_lapors_id = $WajibLapor->id;
            $data_tamu->nama = $value;
            $ktp = $request->bukti[$key];
            $ktpName = time() . '.' . $ktp->getClientOriginalExtension();
            $ktp->move(public_path('upload/wajibLapor/ktp'), $ktpName);
            $data_tamu->ktp = $ktpName;
            $data_tamu->save();
        }


        return redirect()->route('wajib_lapor.index')->with('success', 'Pengajuan anda berhasil, silakan menunggu konfirmasi berikutnya');
    }

    public function storeLaporan(Request $request)
    {
        $request->validate([
            'terlapor' => 'required',
            'bukti' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        $WajibLapor = WajibLapor::create([
            'NIK' => Auth::user()->NIK,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi
        ]);

        foreach ($request->terlapor as $key => $value) {
            $data_tamu = new dataLaporan();
            $data_tamu->wajib_lapors_id = $WajibLapor->id;
            $data_tamu->nama = $value;
            $bukti = $request->bukti[$key];
            $buktiName = time() . '.' . $bukti->getClientOriginalExtension();
            $bukti->move(public_path('upload/wajibLapor/bukti'), $buktiName);
            $data_tamu->bukti = $buktiName;
            $data_tamu->save();
        }


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
