@extends('layouts.app')

@section('content')

    <style>
        #hidden_div {
            display: none;
        }

        #hidden_div2 {
            display: none;
        }
    </style>

    <div class="container-fluid">

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

    <!-- Record DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form PPDB</h6>
            </div>
            <div class="card-body">
                <!-- Menamabhakan Data PPDB-->
                <form method="POST" action="{{route('ppdb.store')}}">

                    @csrf
                    <h5 class="font-weight-bold">A. DATA MURID</h5>
                    <br>
                    <div class="form-group">
                        <label for="namaGuru">Nama Lengkap<span class="text-danger">*</span></label>
                        @if(auth()->user()->role == 'admin')
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama">
                        @elseif (auth()->user()->role == 'ortu')
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama" value="{{auth()->user()->nama}}" readonly>
                        @endif

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Siswa<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikSiswa') is-invalid @enderror"
                        id="nikSiswa" name="nikSiswa">

                        @error('nikSiswa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tempat Lahir<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror"
                        id="tempatLahir" name="tempatLahir">

                        @error('tempatLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tanggal Lahir<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="tglLahir" name="tglLahir">

                        @error('tglLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jenis Kelamin<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('gender')
                        is-invalid @enderror" name="gender">
                            <option value="" selected disabled>PILIH</option>
                            <option value="laki_laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kelas<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('kelas')
                        is-invalid @enderror" name="kelas">
                        <option value="" selected disabled>PILIH</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                        @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kelas Pararel<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('kelasParalel')
                            is-invalid @enderror" name="kelasParalel" onchange="showDiv(this)">
                            <option value="" selected disabled>Pilih Kelas</option>
                            <option value="lama">Pindahan</option>
                            <option value="baru">Baru</option>
                        </select>

                        @error('kelasParalel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group" id="hidden_div">
                        <label for="lama">Pindahan dari kelas<span class="text-danger">*</span></label>
                        <input class="form-control form-control-user @error('kelasAwal') is-invalid @enderror"
                                  name="kelasAwal" id="lama" type="text">

                        @error('kelasAwal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group" id="hidden_div2">
                        <label for="lama">Dari sekolah<span class="text-danger">*</span></label>
                        <input class="form-control @error('sekolahLama') is-invalid @enderror"
                                  name="sekolahLama" id="lama" type="text">

                        @error('sekolahLama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Golongan darah<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('golDarah')
                        is-invalid @enderror" name="golDarah">
                            <option value="" selected disabled> PILIH </option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>

                        @error('golDarah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Usia<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('usia') is-invalid @enderror"
                        id="namaSiswa" name="usia">

                        @error('usia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tinggi Badan<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('tinggi') is-invalid @enderror"
                        id="namaSiswa" name="tinggi">

                        @error('tinggi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Berat Badan<span class="text-danger">*</span></label>
                        <input type="number" maxlength="3" class="form-control @error('berat') is-invalid @enderror"
                        id="namaSiswa" name="berat">

                        @error('berat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Jumlah Saudara<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('jumSaudara') is-invalid @enderror"
                        id="namaSiswa" name="jumSaudara">

                        @error('jumSaudara')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Anak ke<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('anakNo') is-invalid @enderror"
                        id="namaSiswa" name="anakNo">

                        @error('anakNo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">dari Saudara<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('saudaraNo') is-invalid @enderror"
                        id="namaSiswa" name="saudaraNo">

                        @error('saudaraNo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>
                    <h5 class="font-weight-bold">B. ASAL SEKOLAH JENJANG SEBELUMNYA</h5>
                    <br>

                    <div class="form-group">
                        <label for="namaGuru">NPSN Sekolah (RA/TK/Sederajat)</label>
                        <input type="text" class="form-control @error('npsn') is-invalid @enderror"
                        id="namaSiswa" name="npsn">

                        @error('npsn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="asalSekolah">Nama Sekolah<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('asalSekolah') is-invalid @enderror"
                        id="asalSekolah" name="asalSekolah">

                        @error('saudaraNo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="noIjazah">Nomor Seri Ijazah Sebelumnya (RA/TK/Sederajat)</label>
                        <input type="number" maxlength="2" class="form-control @error('noIjazah') is-invalid @enderror"
                        id="noIjazah" name="noIjazah">

                        @error('noIjazah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tglLulus">Tanggal Kelulusan<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLulus') is-invalid @enderror"
                        id="tglLulus" name="tglLulus">

                        @error('tglLulus')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>
                    <h5 class="font-weight-bold">C. DATA ORANG TUA</h5>
                    <br>


                    <div class="form-group">
                        <label for="jabatan">Nomor KK<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('noKK') is-invalid @enderror"
                        id="noKK" name="noKK">

                        @error('noKK')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Tinggal di Bali<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                        id="alamat" name="alamat">

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Desa/Kelurahan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('desa') is-invalid @enderror"
                        id="desa" name="desa">

                        @error('desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kecamatan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kec') is-invalid @enderror"
                        id="kec" name="kec">

                        @error('kec')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kab/Kota<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kota') is-invalid @enderror"
                        id="kota" name="kota">

                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Provinsi<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('prov') is-invalid @enderror"
                        id="prov" name="prov">

                        @error('prov')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kode Pos<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('kodePos') is-invalid @enderror"
                        id="kodePos" name="kodePos">

                        @error('kodePos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jarak Rumah Siswa Ke Madrasah</label>
                        <input type="number" class="form-control @error('jarakRumah') is-invalid @enderror"
                        id="jarakRumah" name="jarakRumah">

                        @error('jarakRumah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Transportasi dari Rumah ke Madrasah</label>
                        <input type="text" class="form-control @error('transport') is-invalid @enderror"
                        id="transport" name="transport">

                        @error('transport')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaAyah') is-invalid @enderror"
                        id="namaAyah" name="namaAyah">

                        @error('namaAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikAyah') is-invalid @enderror"
                        id="nikAyah" name="nikAyah">

                        @error('nikAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ayah Kandung<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('pendidikanAyah')
                        is-invalid @enderror" name="pendidikanAyah">
                            <option value="" selected disabled> PILIH </option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>

                        @error('pendidikanAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('pekerjaanAyah') is-invalid @enderror"
                        id="pekerjaanAyah" name="pekerjaanAyah">

                        @error('pekerjaanAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('noHpAyah') is-invalid @enderror"
                        id="noHpAyah" name="noHpAyah">

                        @error('noHpAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaIbu') is-invalid @enderror"
                        id="namaIbu" name="namaIbu">

                        @error('namaIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikIbu') is-invalid @enderror"
                        id="nikIbu" name="nikIbu">

                        @error('nikIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ibu Kandung<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('pendidikanIbu')
                        is-invalid @enderror" name="pendidikanIbu">
                            <option value="" selected disabled> PILIH </option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>

                        @error('pendidikanIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('pekerjaanIbu') is-invalid @enderror"
                        id="pekerjaanIbu" name="pekerjaanIbu">

                        @error('pekerjaanIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('noHpIbu') is-invalid @enderror"
                        id="noHpIbu" name="noHpIbu">

                        @error('noHpIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>
                    <h5 class="font-weight-bold">D. DATA WALI</h5>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Jika yang bertanggungjawab terhadap pendidikan murid bukan orang tua kandung
                    </small>
                    <br>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Wali</label>
                        <input type="text" class="form-control @error('namaWali') is-invalid @enderror"
                        id="namaWali" name="namaWali">

                        @error('namaWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Wali</label>
                        <input type="number" class="form-control @error('nikWali') is-invalid @enderror"
                        id="nikWali" name="nikWali">

                        @error('nikWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Wali</label>
                        <input type="text" class="form-control @error('alamatWali') is-invalid @enderror"
                        id="alamatWali" name="alamatWali">

                        @error('alamatWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Wali</label>
                        <select type="text" class="form-control form-control-user @error('pendidikanWali')
                        is-invalid @enderror" name="pendidikanWali">
                            <option value="" selected disabled> PILIH </option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>

                        @error('pendidikanWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Wali</label>
                        <input type="text" class="form-control @error('pekerjaanWali') is-invalid @enderror"
                        id="pekerjaanWali" name="pekerjaanWali">

                        @error('pekerjaanWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Wali</label>
                        <input type="number" class="form-control @error('noHpWali') is-invalid @enderror"
                        id="noHpWali" name="noHpWali">

                        @error('noHpWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>
                    <h5 class="font-weight-bold">E. MINAT DAN BAKAT</h5>
                    <br>

                    <div class="form-group">
                        <label for="jabatan">Hobi<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('hobi') is-invalid @enderror"
                        id="hobi" name="hobi">

                        @error('hobi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Cita - cita<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('cita_cita') is-invalid @enderror"
                        id="cita_cita" name="cita_cita">

                        @error('cita_cita')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="prestasi">Lomba / Prestasi</label>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            (diisi jika pernah mengikti lomba atau memiliki prestasi intra atau ekstra )
                        </small>
                        <textarea type="text" class="form-control @error('prestasi') is-invalid @enderror"
                        id="prestasi" name="prestasi"></textarea>

                        @error('prestasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <a class="btn btn-primary" href="{{route('ppdb.index')}}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


    <script type="text/javascript">
        function showDiv(select){
            if(select.value =='lama'){
                document.getElementById('hidden_div').style.display = "block";
            } else{
                document.getElementById('hidden_div').style.display = "none";
            }

            if(select.value =='lama'){
                document.getElementById('hidden_div2').style.display = "block";
            } else{
                document.getElementById('hidden_div2').style.display = "none";
            }
        }
    </script>
@endsection

