<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->role == 'admin'){
            $kegiatan = Galeri::all();
            return view('galeri.index', compact('kegiatan'))
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
        if(Auth::user()->role == 'admin'){
            return view('galeri.create');
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role == 'admin'){
            // memvalidasi inputan
            $request->validate([
                'judul' => 'required',
                'keterangan' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif'
            ]);

            // ddd($request);

            if ($request->hasFile('foto')) {
                $uploadedImages = [];
                foreach ($request->file('foto') as $image) {
                    $path = $image->store('galeri_foto');
                    $uploadedImages[] = ['path' => $path];
                }
            }

            $galeri = new Galeri;
            $galeri->judul = $request->judul;
            $galeri->keterangan= $request->keterangan;
            $galeri->foto = json_encode($uploadedImages);
            $galeri->save();

            return redirect()->route('kegiatan.index')
            ->with('success','Data kegiatan berhasil ditambahkan');

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role == 'admin'){
            $galeri = Galeri::findOrFail($id);
            return view('galeri.show', compact('galeri'));

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if(Auth::user()->role == 'admin'){
            $galeri = Galeri::findOrFail($id);
            return view('galeri.edit', compact('galeri'));
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }

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
        if(Auth::user()->role == 'admin'){

            // Memvalidasi inputan
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        // Inisialisasi array untuk menyimpan path foto yang diunggah
        $uploadedImages = [];

        // Validasi jika ada foto yang dimasukkan
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $image) {
                $path = $image->store('galeri_foto');
                $uploadedImages[] = ['path' => $path];
            }
        }

        $galeri = Galeri::findOrFail($id);

        // Mengupdate atribut non-foto
        $galeri->judul = $request->judul;
        $galeri->keterangan = $request->keterangan;

        // Mengupdate atribut foto hanya jika ada foto yang diunggah
        if (!empty($uploadedImages)) {
            // Hapus foto lama jika ada
            foreach (json_decode($galeri->foto, true) as $oldImage) {
                Storage::delete($oldImage['path']);
            }
            // Simpan foto baru
            $galeri->foto = json_encode($uploadedImages);
        }

        $galeri->timestamps;
        $galeri->save();

        return redirect()->route('kegiatan.index')
            ->with('success','Data kegiatan berhasil diupdate');
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role == 'admin'){
            $galeri = Galeri::findOrFail($id);
            // Menghapus setiap foto di storage
            if ($galeri->foto) {
                foreach (json_decode($galeri->foto, true) as $oldImage) {
                    Storage::delete($oldImage['path']);
                }
            }
            // Menghapus data galeri
            $galeri->delete();
            return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil dihapus');

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    public function showData()
    {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }
}
