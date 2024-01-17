<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{

    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact('warga'));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required|unique:wargas|numeric|digits:16',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'umur' => 'required|numeric',
            'jk' => 'required',
            'pekerjaan_sekolah' => 'required',
            'pekerjaanOrtu'  => 'required',
            'jalan' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric'
        ]);

        $tempat_tgl =  $request->tempat_lahir . ', ' . $request->tanggal_lahir;

        User::create([
            'NIK' => $request->NIK,
            'password' => bcrypt($request->NIK),
            'role' => $request->role
        ]);

        Warga::create([
            'NIK' => $request->NIK,
            'nama' => $request->nama,
            'tempat_tgl' => $tempat_tgl,
            'umur' => $request->umur,
            'jk' => $request->jk,
            'pekerjaan_sekolah' => $request->pekerjaan_sekolah,
            'pekerjaanOrtu'  => $request->pekerjaanOrtu,
            'jalan' => $request->jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'rt' => $request->rt,
            'rw' => $request->rw
        ]);

        return redirect()->route('warga.index')->with('success', 'Anda Berhasil Menambahkan Data');
    }

    public function detail($id)
    {
        $warga = Warga::find($id);
        return view('warga.detail', compact('warga'));
    }

    public function edit()
    {
        $warga = Warga::where('NIK', Auth::user()->NIK)->first();

        return view('warga.edit', compact('warga'));
    }

    public function update(Request $request)
    {
        $warga = User::where('NIK', Auth::user()->NIK)->first();
        $request->validate([
            'newPassword' => 'required|confirmed',
            'currentPassword' => 'required'
        ]);

        //check current password
        if (Hash::check($request->currentPassword, Auth::user()->password)) {
            $warga->update([
                'password' => bcrypt($request->newPassword)
            ]);
            return redirect()->route('warga.edit')->with('success', 'Anda Berhasil Mengubah Password');
        } else {
            return redirect()->route('warga.edit')->with('error', 'Password yang anda masukkan salah');
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        Warga::where('id', $id)->delete();
        return redirect()->route('warga.index')->with('success', 'Berhasil Menghapus Data Warga');
    }
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit()
    // {
    //     $warga = Warga::where('NIK', Auth::user()->NIK)->first();
    //     return view('warga.edit', ['warga' => $warga]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request)
    // {
    //     $warga = Warga::where('NIK', Auth::user()->NIK)->first();
    //     $request->validate([
    //         'nama' => 'required',
    //         'tempat_tgl' => 'required',
    //         'umur' => 'required',
    //         'jk' => 'required',
    //         'pekerjaan_sekolah' => 'required',
    //         'pekerjaanOrtu'  => 'required',
    //         'jalan' => 'required',
    //         'desa' => 'required',
    //         'kecamatan' => 'required',
    //         'rt' => 'required',
    //         'rw' => 'required'
    //     ]);
    //     $warga->update($request->all());
    //     return redirect()->route('warga.edit')->with('success', 'Anda Berhasil Mengubah Data');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function search(Request $request)
    // {
    //     $search = $request->search;

    //     $warga = Warga::where(function ($query) use ($search) {
    //         $query->where('NIK', 'LIKE', '%' . $search . '%')->get();
    //     });

    //     return redirect()->route('desa.index', compact('warga'));
    // }

    // public function destroy(Request $request)
    // {
    //     $id = $request->id;
    //     Warga::where('id', $id)->delete();
    //     return redirect()->route('umkm.index')->with('success', 'Berhasil Menghapus Pengajuan UMKM');
    // }


}
