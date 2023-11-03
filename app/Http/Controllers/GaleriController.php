<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Galeri::all();
        return view('galeri.index', compact('kegiatan'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // memvalidasi inputan
         $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // ddd($request);
        //Validasi jika ada foto yang dimasukkan
        if($request->file('foto')){
            $request->foto = $request->file('foto')->store('galeri_foto');
        }

        Galeri::create([
            'judul' => $request->judul,
            'keterangan'=> $request->keterangan,
            'foto' => $request->foto
        ]);

        return redirect()->route('kegiatan.index')
        ->with('success','Data kegiatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        // ddd($galeri);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // memvalidasi inputan
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // ddd($request);
        //Validasi jika ada foto yang dimasukkan
        if($request->file('foto')){
            if($request->oldImage)
            {
                Storage::delete($request->oldImage);
            }
            $request->foto = $request->file('foto')->store('galeri_foto');
        }

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->keterangan = $request->keterangan;
        $galeri->foto = $request->foto;
        $galeri->timestamps;
        $galeri->save();

        return redirect()->route('kegiatan.index')
        ->with('success','Data kegiatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        // Menghapus foto yang lama di storage
        if($galeri->foto)
        {
            Storage::delete('galeri_foto/' .$galeri->foto);
        }

        // Menghapus data
        $galeri->delete();
        return redirect()->route('kegiatan.index')
        ->with('success','Data kegiatan berhasil dihapus');
    }

    public function showData()
    {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }
}
