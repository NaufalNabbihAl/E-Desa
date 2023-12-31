<?php

namespace App\Http\Controllers;

use App\Models\dataLaporan;
use App\Models\DataTamu;
use App\Models\WajibLapor;
use App\Models\Warga;
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
        if (Auth::user()->role == 'admin') {
            $data = DataTamu::join('wajib_lapors', 'data_tamu.wajib_lapors_id', '=', 'wajib_lapors.id')->get();
            return view('wajib_lapor.LaporTamu', compact('data'));
        } else if (Auth::user()->role == 'warga') {
            $data = DataTamu::join('wajib_lapors', 'data_tamu.wajib_lapors_id', '=', 'wajib_lapors.id')->where('wajib_lapors.NIK', Auth::user()->NIK)->get();
            return view('wajib_lapor.LaporTamu', compact('data'));
        } else {
            $data = DataTamu::join('wajib_lapors', 'data_tamu.wajib_lapors_id', '=', 'wajib_lapors.id')
                ->join('wargas', 'wajib_lapors.NIK', '=', 'wargas.NIK')
                ->where('wargas.rt', Warga::where('NIK', Auth::user()->NIK)->first()->rt)
                ->where('wargas.rw', Warga::where('NIK', Auth::user()->NIK)->first()->rw)
                ->get();
            return view('wajib_lapor.LaporTamu', compact('data'));
        }
    }
    public function laporkan()
    {
        if (Auth::user()->role == 'admin') {
            $data = dataLaporan::join('wajib_lapors', 'data_laporan.wajib_lapors_id', '=', 'wajib_lapors.id')->get();
            return view('wajib_lapor.Laporkan', compact('data'));
        } else if (Auth::user()->role == 'warga') {
            $data = dataLaporan::join('wajib_lapors', 'data_laporan.wajib_lapors_id', '=', 'wajib_lapors.id')->where('wajib_lapors.NIK', Auth::user()->NIK)->get();
            return view('wajib_lapor.Laporkan', compact('data'));
        } else {
            $data = dataLaporan::join('wajib_lapors', 'data_laporan.wajib_lapors_id', '=', 'wajib_lapors.id')
                ->join('wargas', 'wajib_lapors.NIK', '=', 'wargas.NIK')
                ->where('wargas.rt', Warga::where('NIK', Auth::user()->NIK)->first()->rt)
                ->where('wargas.rw', Warga::where('NIK', Auth::user()->NIK)->first()->rw)
                ->get();
            return view('wajib_lapor.Laporkan', compact('data'));
        }
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
            $ktp = $request->bukti[$key];
            $ktpName = $key . '_' . time() . '.' . $ktp->getClientOriginalExtension();
            $ktp->move(public_path('upload/wajibLapor/ktp'), $ktpName);

            DataTamu::create([
                'wajib_lapors_id' => $WajibLapor->id,
                'nama' => $value,
                'ktp' => $ktpName
            ]);
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
            $buktiName = $key . '_' . time() . '.' . $bukti->getClientOriginalExtension();
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
    public function update(Request $request)
    {
        $wajibLapor = WajibLapor::find($request->id);
        $wajibLapor->status = $request->status;
        $wajibLapor->save();
        return redirect()->back()->with('success', 'Status berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
