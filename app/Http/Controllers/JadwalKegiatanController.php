<?php

namespace App\Http\Controllers;

use App\Models\jadwalKegiatan;
use App\Models\Warga;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Concat;

class JadwalKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Warga::where('NIK', Auth::user()->NIK)->get()->first();
        if (Auth::user()->role == 'warga') {
            $jadwal = jadwalKegiatan::where('tingkat', $warga->rt . '/' . $warga->rw)
                ->orWhere('tingkat', 'desa')
                ->orderBy('waktu', 'asc')
                ->get()
                ->all();
        } else if (Auth::user()->role == 'admin') {
            $jadwal = jadwalKegiatan::orderBy('waktu', 'asc')->get()->all();
        }
        return view('jadwal_kegiatan.index', compact(['jadwal']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal_kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelaksana' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
            'waktuSelesai' => 'required',
            'pembahasan' => 'required',
        ]);

        $tingkat = $request->tingkat;

        if ($tingkat != 'desa') {
            $request->validate([
                'rt' => 'required|numeric',
                'rw' => 'required|numeric'
            ]);

            $tingkat = $request->rt . '/' . $request->rw;
        };

        jadwalKegiatan::create([
            'pelaksana' => $request->pelaksana,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'waktuSelesai' => $request->waktuSelesai,
            'tingkat' => $tingkat,
            'pembahasan' => $request->pembahasan
        ]);
        return redirect()->route('jadwal_kegiatan.index')->with('success', 'Input anda berhasil');
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
