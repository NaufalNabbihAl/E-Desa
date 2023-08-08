<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataPeminjam;
use App\Models\PeminjamanBarang;
use App\Models\Warga;
use App\Rules\jumlahBarang;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PeminjamanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datab = DataBarang::all();
        $datap = DataPeminjam::all();
        return view('peminjaman_barang.index', compact('datab', 'datap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = DataBarang::all();
        return view('peminjaman_barang.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_pinjam' => [
                'required',
                function (string $attribute, $value, Closure $fail) use ($request) {
                    if ($value > DataBarang::where('id', $request->id_barang)->first()->jumlah) {
                        $fail('Jumlah barang yang dipinjam melebihi stok yang tersedia');
                    }
                },
            ],
            'keperluan' => 'required',
        ]);

        DataPeminjam::create([
            'NIK' => Auth::user()->NIK,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah_pinjam,
            'tgl_pinjam' => $request->tanggal_pinjam,
            'tgl_kembali' => $request->tanggal_kembali,
            'status' => 'Diproses',
        ]);


        $dataBarang = DataBarang::where('id', $request->id_barang)->first();

        $dataBarang->update([
            'jumlah' => $dataBarang->jumlah - $request->jumlah_pinjam,
        ]);

        return redirect()->route('peminjaman_barang.index');
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
