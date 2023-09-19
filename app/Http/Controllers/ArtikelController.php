<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('updated_at', 'asc')->get();
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        foreach ($request->gambar as $key => $value) {
            $imageName = $key . '-' . time() . '.' . $value->extension();
            $value->move(public_path('upload/artikel'), $imageName);
            
            ArtikelImages::create([
                'artikel_id' => $artikel->id_artikel,
                'name' => $imageName,
            ]);
        }

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $artikel = Artikel::where('id_artikel',$id)->first();
        $gambar = ArtikelImages::where('artikel_id', $id)->get();
        return view('artikel.edit', compact('artikel', 'gambar'));
    }

    public function update(Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $artikel = Artikel::find($request->id_artikel);
        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        foreach ($request->gambar as $key => $value) {
            $imageName = $key . '-' . time() . '.' . $value->extension();
            $value->move(public_path('upload/artikel'), $imageName);
            
            ArtikelImages::create([
                'artikel_id' => $artikel->id_artikel,
                'name' => $imageName,
            ]);
        }

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diubah');
    }

    public function destroyGambar($id)
    {
        $gambar = ArtikelImages::find($id);
        
        File::delete(public_path('upload/artikel/' . $gambar->name));
        $gambar->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }

    public function destroy($id){
        $artikel = Artikel::find($id);
        $gambar = ArtikelImages::where('artikel_id', $id)->get();

        foreach ($gambar as $key => $value) {
            File::delete(public_path('upload/artikel/' . $value->name));
            $value->delete();
        }

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
}
