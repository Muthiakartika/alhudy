<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(FacadesAuth::user()->role == 'admin'){
            $dataGuru = Guru::all();
            return view('guru.index', compact('dataGuru'))
            ->with('i', (request()->input('page', 1)-1)*5);

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
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
        if(FacadesAuth::user()->role == 'admin'){
            // memvalidasi inputan
            $request->validate([
                'nama' => 'required',
                'jabatan' => 'required',
                'tempat' => 'required',
                'tglLahir' => 'required',
                'nipy' => 'required',
                'noHp' => 'required',
                'foto' => 'required|image|file'
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
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(FacadesAuth::user()->role == 'admin'){
            $guru = Guru::findOrFail($id);
            return view('guru.show', compact('guru'));

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        if(FacadesAuth::user()->role == 'admin'){
            return view('guru.edit', compact('guru'));
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
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
        if(FacadesAuth::user()->role == 'admin'){
            // memvalidasi inputan
            $request->validate([
                'nama' => '',
                'jabatan' => '',
                'tempat' => '',
                'tglLahir' => '',
                'nipy' => '',
                'noHp' => '',
                'foto' => ''
            ]);

            // Validasi jika ada foto yang dimasukkan
            if ($request->hasFile('foto')) {
                // dd('Old image value: ' . $request->foto);
                // Menghapus foto yang lama di storage
                if ($request->oldImage && Storage::exists($request->oldImage)) {
                    Storage::delete($request->oldImage);
                }
                // Simpan foto baru
                $request->foto = $request->file('foto')->store('galeri_foto');
            } else {
                // Jika tidak ada perubahan terhadap foto
                $request->merge(['foto' => $request->oldImage]);
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

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Guru $guru)
    {
        if (FacadesAuth::user()->role == 'admin') {
            // Menghapus foto yang lama di storage
            if ($guru->foto) {
                // dd('nilai:' .$guru->foto);
                Storage::delete($guru->foto);
            }

            // Menghapus data
            $guru->delete();

            return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
        } else {
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Menampilkan data pengajar di halaman depan
     */
    public function showData()
    {
        $guru = Guru::all();
        return view('tentangalhudy', compact('guru'));
    }
}
