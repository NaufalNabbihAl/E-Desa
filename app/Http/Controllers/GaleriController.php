<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Galeri;


class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeri = Galeri::all();
        return view('galeri.index', ['galeri' => $galeri, 'title' => 'Data galeri | E-Desa']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('galeri.tambah',['title' => 'Tambah Data galeri | E-Desa']);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $storedPath = $image->store('images', 'public');

            $galeri = new Galeri();
            $galeri->image = $storedPath;
            $galeri->save();
        }

        return redirect('/admin/galeri')->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $galeri = Galeri::where('id_galeri', $id)->first();
        return view ('galeri.detail', ['galeri' => $galeri], ['title' => 'Detail Data galeri | E-Dea']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::where('id_galeri',$id)->get();
        return view ('galeri.edit', ['galeri' => $galeri,], ['title' => 'Edit Data galeri | E-Desa']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $galeri = Galeri::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storedPath = $image->store('images', 'public');
            $galeri->image = $storedPath;
        }
    
        $galeri->save();
    
        return redirect('/admin/galeri')->with('success', 'Updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Galeri::where('id_galeri', $id)->delete();
        return redirect('/admin/galeri');
    }
}
