<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        
        $image = $request->file('gambar');
        $imgName = time() . '.' . $image->extension();
        $image->move(public_path('upload/galery'), $imgName);

        Galeri::create([
            'image' => $imgName,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Image berhasil ditambahkan');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);

        File::delete('upload/galery/' . $galeri->image);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Image berhasil dihapus');
    }
}
