<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGuru = Guru::all();
        return view('guru.index', compact('dataGuru'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'nama' => 'required',
            'jabatan' => 'required',
            'tempat' => 'required',
            'tglLahir' => 'required',
            'nipy' => 'required',
            'noHp' => 'required',
            'foto' => 'required|image|file|max:1024'
        ]);

        //Validasi jika ada foto yang dimasukkan
        if($request->file('foto')){
            $request->foto = $request->file('foto')->store('galeri_foto');
        }

        Guru::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tempat' => $request->tempat,
            'tglLahir' => $request->tglLahir,
            'nipy' => $request->nipy,
            'noHp' => $request->noHp,
            'foto' => $request->foto,
        ]);

        return redirect()->route('guru.index')
        ->with('success','Data guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        // memvalidasi inputan
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tempat' => 'required',
            'tglLahir' => 'required',
            'nipy' => 'required',
            'noHp' => 'required',
            'foto' => 'required|image|file|max:2048'
        ]);

        //Validasi jika ada foto yang dimasukkan
        if($request->file('foto'))
        {
            // Menghapus foto yang lama di storage
            if($request->oldImage)
            {
                Storage::delete('galeri_foto/' .$request->oldImage);
            }
            $request->foto= $request->file('foto')->store('galeri_foto');
        }


        $guru->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tempat' => $request->tempat,
            'tglLahir' => $request->tglLahir,
            'nipy' => $request->nipy,
            'noHp' => $request->noHp,
            'foto' => $request->foto,
        ]);

        return redirect()->route('guru.index')
        ->with('success','Data guru berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        // Menghapus foto yang lama di storage
        if($guru->foto)
        {
            Storage::delete('galeri_foto/' .$guru->foto);
        }

        // Menghapus data
        $guru->delete();
        return redirect()->route('guru.index')
        ->with('success','Data guru berhasil dihapus');
    }
}
