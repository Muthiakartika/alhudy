@extends('layouts.app')

@section('content')

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
                <h6 class="m-0 font-weight-bold text-success">Form Guru</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Guru-->
                <form method="POST">
                    {{ csrf_field() }}
                    <h5 class="font-weight-bold">A. DATA MURID</h5>
                    <br>
                    <div class="form-group">
                        <label for="namaGuru">Nama Lengkap</label>
                        <span type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama">{{$ppdb->nama}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Siswa</label>
                        <span type="number" class="form-control"
                        id="nikSiswa" name="nikSiswa">{{$ppdb->nikSiswa}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tempat Lahir</label>
                        <span type="text" class="form-control"
                        id="tempatLahir" name="tempatLahir">{{$ppdb->tempatLahir}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tanggal Lahir</label>
                        <span type="date" class="form-control"
                        id="tglLahir" name="tglLahir">{{$ppdb->tglLahir}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jenis Kelamin</label>
                        <span type="text" class="form-control form-control-user" name="gender">{{$ppdb->gender}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kelas</label>
                        <span type="text" class="form-control form-control-user" name="kelas">{{$ppdb->kelas}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kelas Pararel</label>
                        <span type="text" class="form-control form-control-user" name="kelasParalel">{{$ppdb->kelasParalel}}
                        </span>
                    </div>

                    <div class="form-group" id="hidden_div">
                        <label for="lama">Pindahan dari kelas</label>
                        <span class="form-control form-control-user"
                                  name="kelasAwal" id="lama" type="text">{{$ppdb->kelasAwal}}</span>
                    </div>

                    <div class="form-group" id="hidden_div2">
                        <label for="lama">Dari sekolah</label>
                        <span class="form-control" name="sekolahLama" id="lama" type="text">{{$ppdb->sekolahLama}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Golongan darah</label>
                        <span type="text" class="form-control form-control-user">{{$ppdb->golDarah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Usia</label>
                        <span type="number" class="form-control"
                        id="usia" name="usia">{{$ppdb->usia}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tinggi Badan</label>
                        <span type="number" class="form-control"
                        id="namaSiswa" name="tinggi">{{$ppdb->tinggi}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Berat Badan</label>
                        <span type="number" maxlength="3" class="form-control"
                        id="namaSiswa" name="berat">{{$ppdb->berat}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Jumlah Saudara</label>
                        <input type="number" maxlength="2" class="form-control"
                        id="namaSiswa" name="jumSaudara">{{$ppdb->jumSaudara}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Anak ke</label>
                        <span type="number" maxlength="2" class="form-control"
                        id="namaSiswa" name="anakNo">{{$ppdb->anakNo}}</span>
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">dari Saudara</label>
                        <span type="number" maxlength="2" class="form-control"
                        id="namaSiswa" name="saudaraNo">{{$ppdb->saudaraNo}}</span>
                    </div>

                    <br>
                    <h5 class="font-weight-bold">B. ASAL SEKOLAH JENJANG SEBELUMNYA</h5>
                    <br>

                    <div class="form-group">
                        <label for="namaGuru">NPSN Sekolah (RA/TK/Sederajat)</label>
                        <span type="text" class="form-control"
                        id="namaSiswa" name="npsn">{{$ppdb->npsn}}</span>
                    </div>

                    <div class="form-group">
                        <label for="asalSekolah">Nama Sekolah</label>
                        <span type="text" class="form-control"
                        id="asalSekolah" name="asalSekolah">{{$ppdb->asalSekolah}}</span>
                    </div>
                    <div class="form-group">
                        <label for="noIjazah">Nomor Seri Ijazah Sebelumnya (RA/TK/Sederajat)</label>
                        <span type="number" class="form-control"
                        id="noIjazah" name="noIjazah">{{$ppdb->noIjazah}}</span>
                    </div>
                    <div class="form-group">
                        <label for="tglLulus">Tanggal Kelulusan</label>
                        <span type="date" class="form-control"
                        id="tglLulus" name="tglLulus">{{$ppdb->tglLulus}}</span>
                    </div>

                    <br>
                    <h5 class="font-weight-bold">C. DATA ORANG TUA</h5>
                    <br>


                    <div class="form-group">
                        <label for="jabatan">Nomor KK</label>
                        <span type="number" class="form-control"
                        id="noKK" name="noKK">{{$ppdb->noKK}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Tinggal di Bali</label>
                        <span type="text" class="form-control"
                        id="alamat" name="alamat">{{$ppdb->alamat}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Desa/Kelurahan</label>
                        <span type="text" class="form-control"
                        id="desa" name="desa">{{$ppdb->desa}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kecamatan</label>
                        <span type="text" class="form-control"
                        id="kec" name="kec">{{$ppdb->kec}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kab/Kota</label>
                        <span type="text" class="form-control"
                        id="kota" name="kota">{{$ppdb->kota}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Provinsi</label>
                        <span type="text" class="form-control"
                        id="prov" name="prov">{{$ppdb->prov}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kode Pos</label>
                        <span type="number" class="form-control"
                        id="kodePos" name="kodePos">{{$ppdb->kodePos}}<span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jarak Rumah Siswa Ke Madrasah</label>
                        <span type="number" class="form-control"
                        id="jarakRumah" name="jarakRumah">{{$ppdb->jarakRumah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Transportasi dari Rumah ke Madrasah</label>
                        <span type="text" class="form-control"
                        id="transport" name="transport">{{$ppdb->transport}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ayah Kandung</label>
                        <span type="text" class="form-control"
                        id="namaAyah" name="namaAyah">{{$ppdb->namaAyah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ayah Kandung</label>
                        <span type="number" class="form-control"
                        id="nikAyah" name="nikAyah">{{$ppdb->nikAyah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ayah Kandung</label>
                        <span type="text" class="form-control form-control-user name="pendidikanWali">{{$ppdb->pendidikanAyah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Ayah Kandung</label>
                        <span type="text" class="form-control"
                        id="pekerjaanAyah" name="pekerjaanAyah" >{{$ppdb->pekerjaanAyah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ayah Kandung</label>
                        <span type="number" class="form-control"
                        id="noHpAyah" name="noHpAyah">{{$ppdb->noHpAyah}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Ibu Kandung</label>
                        <span type="text" class="form-control"
                        id="namaIbu" name="namaIbu" >{{$ppdb->namaIbu}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Ibu Kandung</label>
                        <span type="number" class="form-control"
                        id="nikIbu" name="nikIbu">{{$ppdb->nikIbu}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Ibu Kandung</label>
                        <span type="text" class="form-control form-control-user">{{$ppdb->pendidikanIbu}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Ibu Kandung</label>
                        <span type="text" class="form-control"
                        id="pekerjaanIbu" name="pekerjaanIbu">{{$ppdb->pekerjaanIbu}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Ibu Kandung</label>
                        <span type="number" class="form-control"
                        id="noHpIbu" name="noHpIbu">{{$ppdb->noHpIbu}}</span>
                    </div>

                    <br>
                    <h5 class="font-weight-bold">D. DATA WALI</h5>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Jika yang bertanggungjawab terhadap pendidikan murid bukan orang tua kandung
                    </small>
                    <br>

                    <div class="form-group">
                        <label for="jabatan">Nama Lengkap Wali</label>
                        <span type="text" class="form-control"
                        id="namaWali" name="namaWali">{{$ppdb->namaWali}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Induk Kependudukan (NIK) Wali</label>
                        <span type="number" class="form-control"
                        id="nikWali" name="nikWali">{{$ppdb->nikWali}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Alamat Wali</label>
                        <span type="text" class="form-control"
                        id="alamatWali" name="alamatWali">{{$ppdb->alamatWali}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pendidikan Terakhir Wali</label>
                        <span type="text" class="form-control form-control-user" name="pendidikanWali">{{$ppdb->pendidikanWali}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Pekerjaan Wali</label>
                        <span type="text" class="form-control" id="pekerjaanWali" name="pekerjaanWali" >{{$ppdb->pekerjaanWali}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Nomor Handphone/WA Wali</label>
                        <span type="number" class="form-control"
                        id="noHpWali" name="noHpWali">{{$ppdb->noHpWali}}</span>
                    </div>

                    <br>
                    <h5 class="font-weight-bold">E. MINAT DAN BAKAT</h5>
                    <br>

                    <div class="form-group">
                        <label for="jabatan">Hobi</label>
                        <span type="text" class="form-control"
                        id="hobi" name="hobi">{{$ppdb->hobi}}</span>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Cita - cita</label>
                        <span type="text" class="form-control"
                        id="cita_cita" name="cita_cita">{{$ppdb->cita_cita}}</span>
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Lomba / Prestasi</label>
                        <span type="text" class="form-control" id="prestasi" name="prestasi" >{{$ppdb->prestasi}}</span>
                    </div>
                    <div class="form-group">
                        <a href="{{route('ppdb.index')}}" class="btn btn-primary mr-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        document.querySelector('trix-editor').editor.element.setAttribute('contentEditable', false)
    </script>

@endsection

