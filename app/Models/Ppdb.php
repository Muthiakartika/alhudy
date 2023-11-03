<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nikSiswa',
        'tempatLahir',
        'tglLahir',
        'gender',
        'kelas',
        'kelasAwal',
        'sekolahLama',
        'sekolahBaru',
        'golDarah',
        'usia',
        'tinggi',
        'berat',
        'jumSaudara',
        'anakNo',
        'saudaraNo',
        'npsn',
        'asalSekolah',
        'noIjazah',
        'tglLulus',
        'noKK',
        'alamat',
        'desa',
        'kec',
        'kota',
        'prov',
        'kodePos',
        'jarakRumah',
        'transport',
        'namaAyah',
        'nikAyah',
        'pendidikanAyah',
        'pekerjaanAyah',
        'noHpAyah',
        'namaIbu',
        'nikIbu',
        'pendidikanIbu',
        'pekerjaanIbu',
        'noHpIbu',
        'namaWali',
        'nikWali',
        'pendidikanWali',
        'pekerjaanWali',
        'noHpWali',
        'alamatWali',
        'hobi',
        'cita_cita',
        'prestasi',
    ];
}
