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
                <form method="POST" action="{{route('ppdb.update', $ppdb->id)}}">

                    @csrf
                    @method('PUT')
                    <h5 class="font-weight-bold">A. DATA MURID</h5>
                    <br>
                    <div class="form-group">
                        <label for="namaGuru">Nama Lengkap<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama" value="{{ $ppdb->nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Siswa<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikSiswa') is-invalid @enderror"
                        id="nikSiswa" name="nikSiswa" value="{{$ppdb->nikSiswa}}">

                        @error('nikSiswa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tempat Lahir<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror"
                        id="tempatLahir" name="tempatLahir" value="{{$ppdb->tempatLahir}}">

                        @error('tempatLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tanggal Lahir<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="tglLahir" name="tglLahir" value="{{$ppdb->tglLahir}}">

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
                            <option value="" selected disabled>PILIH </option>
                            <option value="laki_laki" {{ old('gender') == 'laki_laki' || (isset($ppdb) && $ppdb->gender == 'laki_laki') ? 'selected' : '' }}>Laki - Laki</option>
                            <option value="perempuan" {{ old('gender') == 'perempuan' || (isset($ppdb) && $ppdb->gender == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
                        </select>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kelas<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('kelasId')
                        is-invalid @enderror" name="kelas">
                        <option value="" selected disabled>PILIH</option>
                        <option value="1" {{ old('kelas') == '1' || (isset($ppdb) && $ppdb->kelas == '1') ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('kelas') == '2' || (isset($ppdb) && $ppdb->kelas == '2') ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('kelas') == '3' || (isset($ppdb) && $ppdb->kelas == '3') ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('kelas') == '4' || (isset($ppdb) && $ppdb->kelas == '4') ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('kelas') == '5' || (isset($ppdb) && $ppdb->kelas == '5') ? 'selected' : '' }}>5</option>
                        <option value="6" {{ old('kelas') == '6' || (isset($ppdb) && $ppdb->kelas == '6') ? 'selected' : '' }}>6</option>
                    </select>

                        @error('kelasId')
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
                            <option value="lama" {{ old('kelasParalel') == 'lama' || (isset($ppdb) && $ppdb->kelasParalel == 'lama') ? 'selected' : '' }}>Pindahan</option>
                            <option value="baru" {{ old('kelasParalel') == 'baru' || (isset($ppdb) && $ppdb->kelasParalel == 'baru') ? 'selected' : '' }}>Baru</option>
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
                                  name="kelasAwal" id="lama" type="text" value="{{$ppdb->kelasAwal}}">

                        @error('kelasAwal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group" id="hidden_div2">
                        <label for="lama">Dari sekolah<span class="text-danger">*</span></label>
                        <input class="form-control @error('sekolahLama') is-invalid @enderror"
                                  name="sekolahLama" id="lama" type="text" value="{{$ppdb->sekolahLama}}">

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
                            <option value="A" {{ old('golDarah') == 'A' || (isset($ppdb) && $ppdb->golDarah == 'A') ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('golDarah') == 'B' || (isset($ppdb) && $ppdb->golDarah == 'B') ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ old('golDarah') == 'AB' || (isset($ppdb) && $ppdb->golDarah == 'AB') ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ old('golDarah') == 'O' || (isset($ppdb) && $ppdb->golDarah == 'O') ? 'selected' : '' }}>O</option>
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
                        id="usia" name="usia" value="{{$ppdb->usia}}">

                        @error('usia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tinggi Badan<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('tinggi') is-invalid @enderror"
                        id="namaSiswa" name="tinggi" value="{{$ppdb->tinggi}}">

                        @error('tinggi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Berat Badan<span class="text-danger">*</span></label>
                        <input type="number" maxlength="3" class="form-control @error('berat') is-invalid @enderror"
                        id="namaSiswa" name="berat" value="{{$ppdb->berat}}">

                        @error('berat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Jumlah Saudara<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('jumSaudara') is-invalid @enderror"
                        id="namaSiswa" name="jumSaudara" value="{{$ppdb->jumSaudara}}">

                        @error('jumSaudara')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Anak ke<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('anakNo') is-invalid @enderror"
                        id="namaSiswa" name="anakNo" value="{{$ppdb->anakNo}}">

                        @error('anakNo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">dari Saudara<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('saudaraNo') is-invalid @enderror"
                        id="namaSiswa" name="saudaraNo" value="{{$ppdb->saudaraNo}}">

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
                        id="namaSiswa" name="npsn" value="{{$ppdb->npsn}}">

                        @error('npsn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="asalSekolah">Nama Sekolah<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('asalSekolah') is-invalid @enderror"
                        id="asalSekolah" name="asalSekolah" value="{{$ppdb->asalSekolah}}">

                        @error('saudaraNo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="noIjazah">Nomor Seri Ijazah Sebelumnya (RA/TK/Sederajat)</label>
                        <input type="number" class="form-control @error('noIjazah') is-invalid @enderror"
                        id="noIjazah" name="noIjazah" value="{{$ppdb->noIjazah}}">

                        @error('noIjazah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tglLulus">Tanggal Kelulusan<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLulus') is-invalid @enderror"
                        id="tglLulus" name="tglLulus" value="{{$ppdb->tglLulus}}">

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
                        id="noKK" name="noKK" value="{{$ppdb->noKK}}">

                        @error('noKK')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Tinggal di Bali<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                        id="alamat" name="alamat" value="{{$ppdb->alamat}}">

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Desa/Kelurahan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('desa') is-invalid @enderror"
                        id="desa" name="desa" value="{{$ppdb->desa}}">

                        @error('desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kecamatan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kec') is-invalid @enderror"
                        id="kec" name="kec" value="{{$ppdb->kec}}">

                        @error('kec')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kab/Kota<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kota') is-invalid @enderror"
                        id="kota" name="kota" value="{{$ppdb->kota}}">

                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Provinsi<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('prov') is-invalid @enderror"
                        id="prov" name="prov" value="{{$ppdb->prov}}">

                        @error('prov')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kode Pos<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('kodePos') is-invalid @enderror"
                        id="kodePos" name="kodePos" value="{{$ppdb->kodePos}}">

                        @error('kodePos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jarak Rumah Siswa Ke Madrasah</label>
                        <input type="number" class="form-control @error('jarakRumah') is-invalid @enderror"
                        id="jarakRumah" name="jarakRumah" value="{{$ppdb->jarakRumah}}">

                        @error('jarakRumah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Transportasi dari Rumah ke Madrasah</label>
                        <input type="text" class="form-control @error('transport') is-invalid @enderror"
                        id="transport" name="transport" value="{{$ppdb->transport}}">

                        @error('transport')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaAyah') is-invalid @enderror"
                        id="namaAyah" name="namaAyah" value="{{$ppdb->namaAyah}}">

                        @error('namaAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikAyah') is-invalid @enderror"
                        id="nikAyah" name="nikAyah" value="{{$ppdb->nikAyah}}">

                        @error('nikAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ayah Kandung<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('pendidikanWali')
                        is-invalid @enderror" name="pendidikanWali">
                            <option value="" selected disabled> PILIH </option>
                            <option value="SD" {{ old('pendidikanAyah') == 'SD' || (isset($ppdb) && $ppdb->pendidikanAyah == 'SD') ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ old('pendidikanAyah') == 'SMP' || (isset($ppdb) && $ppdb->pendidikanAyah == 'SMP') ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ old('pendidikanAyah') == 'SMA' || (isset($ppdb) && $ppdb->pendidikanAyah == 'SMA') ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ old('pendidikanAyah') == 'SMK' || (isset($ppdb) && $ppdb->pendidikanAyah == 'SMK') ? 'selected' : '' }}>SMK</option>
                            <option value="D1" {{ old('pendidikanAyah') == 'D1' || (isset($ppdb) && $ppdb->pendidikanAyah == 'D1') ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ old('pendidikanAyah') == 'D2' || (isset($ppdb) && $ppdb->pendidikanAyah == 'D2') ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ old('pendidikanAyah') == 'D3' || (isset($ppdb) && $ppdb->pendidikanAyah == 'D3') ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ old('pendidikanAyah') == 'S1' || (isset($ppdb) && $ppdb->pendidikanAyah == 'S1') ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ old('pendidikanAyah') == 'S2' || (isset($ppdb) && $ppdb->pendidikanAyah == 'S2') ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ old('pendidikanAyah') == 'S3' || (isset($ppdb) && $ppdb->pendidikanAyah == 'S3') ? 'selected' : '' }}>S3</option>
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
                        id="pekerjaanAyah" name="pekerjaanAyah" value="{{$ppdb->pekerjaanAyah}}">

                        @error('pekerjaanAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('noHpAyah') is-invalid @enderror"
                        id="noHpAyah" name="noHpAyah" value="{{$ppdb->noHpAyah}}">

                        @error('noHpAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaIbu') is-invalid @enderror"
                        id="namaIbu" name="namaIbu" value="{{$ppdb->namaIbu}}">

                        @error('namaIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nikIbu') is-invalid @enderror"
                        id="nikIbu" name="nikIbu" value="{{$ppdb->nikIbu}}">

                        @error('nikIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ibu Kandung<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('pendidikanWali')
                        is-invalid @enderror" name="pendidikanWali">
                            <option value="" selected disabled> PILIH </option>
                            <option value="SD" {{ old('pendidikanIbu') == 'SD' || (isset($ppdb) && $ppdb->pendidikanIbu == 'SD') ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ old('pendidikanIbu') == 'SMP' || (isset($ppdb) && $ppdb->pendidikanIbu == 'SMP') ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ old('pendidikanIbu') == 'SMA' || (isset($ppdb) && $ppdb->pendidikanIbu == 'SMA') ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ old('pendidikaIbui') == 'SMK' || (isset($ppdb) && $ppdb->pendidikanIbu == 'SMK') ? 'selected' : '' }}>SMK</option>
                            <option value="D1" {{ old('pendidikanIbu') == 'D1' || (isset($ppdb) && $ppdb->pendidikanIbu == 'D1') ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ old('pendidikanIbu') == 'D2' || (isset($ppdb) && $ppdb->pendidikanIbu == 'D2') ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ old('pendidikanIbu') == 'D3' || (isset($ppdb) && $ppdb->pendidikanIbu == 'D3') ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ old('pendidikanIbu') == 'S1' || (isset($ppdb) && $ppdb->pendidikanIbu == 'S1') ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ old('pendidikanIbu') == 'S2' || (isset($ppdb) && $ppdb->pendidikanIbu == 'S2') ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ old('pendidikanIbu') == 'S3' || (isset($ppdb) && $ppdb->pendidikanIbu == 'S3') ? 'selected' : '' }}>S3</option>
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
                        id="pekerjaanIbu" name="pekerjaanIbu" value="{{$ppdb->pekerjaanIbu}}">

                        @error('pekerjaanIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('noHpIbu') is-invalid @enderror"
                        id="noHpIbu" name="noHpIbu" value="{{$ppdb->noHpIbu}}">

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
                        id="namaWali" name="namaWali" value="{{$ppdb->namaWali}}">

                        @error('namaWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Wali</label>
                        <input type="number" class="form-control @error('nikWali') is-invalid @enderror"
                        id="nikWali" name="nikWali" value="{{$ppdb->nikWali}}">

                        @error('nikWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Wali</label>
                        <input type="text" class="form-control @error('alamatWali') is-invalid @enderror"
                        id="alamatWali" name="alamatWali" value="{{$ppdb->alamatWali}}">

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
                            <option value="SD" {{ old('pendidikanWali') == 'SD' || (isset($ppdb) && $ppdb->pendidikanWali == 'SD') ? 'selected' : '' }}>SD</option>
                            <option value="SMP"{{ old('pendidikanWali') == 'SMP' || (isset($ppdb) && $ppdb->pendidikanWali == 'SMP') ? 'selected' : '' }}>SMP</option>
                            <option value="SMA"{{ old('pendidikanWali') == 'SMA' || (isset($ppdb) && $ppdb->pendidikanWali == 'SMA') ? 'selected' : '' }}>SMA</option>
                            <option value="SMK"{{ old('pendidikanWali') == 'SMK' || (isset($ppdb) && $ppdb->pendidikanWali == 'SMK') ? 'selected' : '' }}>SMK</option>
                            <option value="D1" {{ old('pendidikanWali') == 'D1' || (isset($ppdb) && $ppdb->pendidikanWali == 'D1') ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ old('pendidikanWali') == 'D2' || (isset($ppdb) && $ppdb->pendidikanWali == 'D2') ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ old('pendidikanWali') == 'D3' || (isset($ppdb) && $ppdb->pendidikanWali == 'D3') ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ old('pendidikanWali') == 'S1' || (isset($ppdb) && $ppdb->pendidikanWali == 'S1') ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ old('pendidikanWali') == 'S2' || (isset($ppdb) && $ppdb->pendidikanWali == 'S2') ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ old('pendidikanWali') == 'S3' || (isset($ppdb) && $ppdb->pendidikanWali == 'S3') ? 'selected' : '' }}>S3</option>
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
                        id="pekerjaanWali" name="pekerjaanWali" value="{{$ppdb->pekerjaanWali}}">

                        @error('pekerjaanWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Wali</label>
                        <input type="number" class="form-control @error('noHpWali') is-invalid @enderror"
                        id="noHpWali" name="noHpWali" value="{{$ppdb->noHpWali}}">

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
                        id="hobi" name="hobi" value="{{$ppdb->hobi}}">

                        @error('hobi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Cita - cita<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('cita_cita') is-invalid @enderror"
                        id="cita_cita" name="cita_cita" value="{{$ppdb->cita_cita}}">

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
                        id="prestasi" name="prestasi" >{{$ppdb->prestasi}}</textarea>

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

