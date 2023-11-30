<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $dataMurid = Murid::with('kelas')->get();
            return view('murid.index', compact('dataMurid'))
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
            $dataKelas = Kelas::all();
            return view('murid.create', compact('dataKelas'));

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
            $request->validate([
                'nama' => 'required',
                'kelasId' => 'required',
                'nisn' => 'required',
                'tempat' => 'required',
                'tglLahir' => 'required',
                'umur' => 'required',
                'alamat' => 'required',
                'noHp' => '',
                'status' => 'required',
                'gender' => 'required',
                'kebKhusus' => 'required',
                'disabilitas' => 'required',
                'kip' => '',
                'namaAyah' => 'required',
                'namaIbu' => 'required',
                'namaWali' => ''
            ]);

            Murid::create($request->all());
            return redirect()->route('murid.index')
            ->with('success','Data siswa berhasil ditambahkan');

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function show(Murid $murid)
    {
        if(Auth::user()->role == 'admin'){
            $murid->load('kelas');
            return view('murid.show', compact('murid'));
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(Murid $murid)
    {
        if(Auth::user()->role == 'admin'){
            $dataKelas = DB::table('kelas')->get();
            return view('murid.edit', compact('murid', 'dataKelas'));
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Murid $murid)
    {
        if(Auth::user()->role == 'admin'){
            $request->validate([
                'nama' => '',
                'kelasId' => '',
                'nisn' => '',
                'tempat' => '',
                'tglLahir' => '',
                'umur' => '',
                'alamat' => '',
                'noHp' => '',
                'status' => '',
                'gender' => '',
                'kebKhusus' => '',
                'disabilitas' => '',
                'kip' => '',
                'namaAyah' => '',
                'namaIbu' => '',
                'namaWali' => ''
            ]);

            $murid->update($request->all());
            return redirect()->route('murid.index')
            ->with('success','Data siswa berhasil diupdate');

        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murid $murid)
    {
        if(Auth::user()->role == 'admin'){
            $murid->delete();
            return redirect()->route('murid.index')
            ->with('success','Data siswa berhasil dihapus');
        } else{
            return back()->with('error', 'Maaf Anda Tidak Memiliki Hak Akses!');
        }

    }
}
