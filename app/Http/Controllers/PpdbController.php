<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarMurid = Ppdb::all();
        return view('daftarMurid.index', compact('daftarMurid'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarMurid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nikSiswa' => 'required',
            'tempatLahir' => 'required',
            'tglLahir' => 'required',
            'gender' => 'required',
            'kelas' => 'required',
            'kelasParalel' => 'required',
            'kelasAwal' => '',
            'sekolahLama' => '',
            'golDarah' => 'required',
            'usia' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'jumSaudara' => 'required',
            'anakNo' => 'required',
            'saudaraNo' => 'required',
            'npsn' => '',
            'asalSekolah' => 'required',
            'noIjazah' => '',
            'tglLulus' => 'required',
            'noKK' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kec' => 'required',
            'kota' => 'required',
            'prov' => 'required',
            'kodePos' => 'required',
            'jarakRumah' => '',
            'transport' => '',
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'noHpAyah' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'pendidikanIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'noHpIbu' => 'required',
            'namaWali' => '',
            'nikWali' => '',
            'pendidikanWali' => '',
            'pekerjaanWali' => '',
            'noHpWali' => '',
            'alamatWali' => '',
            'hobi'=> 'required',
            'cita_cita'=> 'required',
            'prestasi' => '',
        ]);

        Ppdb::create($request->all());
        return redirect()->route('ppdb.index')
        ->with('success','Pendaftaran siswa berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        return view('daftarMurid.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        return view('daftarMurid.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        $request->validate([
            'nama' => '',
            'nikSiswa' => '',
            'tempatLahir' => '',
            'tglLahir' => '',
            'gender' => '',
            'kelas' => '',
            'kelasParalel' => '',
            'kelasAwal' => '',
            'sekolahLama' => '',
            'golDarah' => '',
            'usia' => '',
            'tinggi' => '',
            'berat' => '',
            'jumSaudara' => '',
            'anakNo' => '',
            'saudaraNo' => '',
            'npsn' => '',
            'asalSekolah' => '',
            'noIjazah' => '',
            'tglLulus' => '',
            'noKK' => '',
            'alamat' => '',
            'desa' => '',
            'kec' => '',
            'kota' => '',
            'prov' => '',
            'kodePos' => '',
            'jarakRumah' => '',
            'transport' => '',
            'namaAyah' => '',
            'nikAyah' => '',
            'pendidikanAyah' => '',
            'pekerjaanAyah' => '',
            'noHpAyah' => '',
            'namaIbu' => '',
            'nikIbu' => '',
            'pendidikanIbu' => '',
            'pekerjaanIbu' => '',
            'noHpIbu' => '',
            'namaWali' => '',
            'nikWali' => '',
            'pendidikanWali' => '',
            'pekerjaanWali' => '',
            'noHpWali' => '',
            'alamatWali' => '',
            'hobi'=> '',
            'cita_cita'=> '',
            'prestasi' => '',
        ]);

        $ppdb->update($request->all());
        return redirect()->route('ppdb.index')
        ->with('success','Pendaftaran siswa berhasil diperbaharui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        // Menghapus data
        $ppdb->delete();
        return redirect()->route('ppdb.index')
        ->with('success','Data PPDB berhasil di hapus');
    }

    public function export($id){

        $ppdb = Ppdb::findOrFail($id);
        $pdf = Pdf::loadview('daftarMurid.export', compact('ppdb'))
            ->setOptions(['defaultFont' => 'calibri'])
            ->setPaper('A4', 'portrait');

        return $pdf->stream('Form Pendaftaran.pdf', array("Attachment" => false));
        exit(0);
    }
}
