@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif

    <!-- Record DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Siswa</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Siswa-->
                <form method="POST" action="{{route('murid.store')}}">

                    @csrf

                    <div class="form-group">
                        <label for="namaGuru">Nama Siswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama">

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Kelas</label>
                        <select type="text" class="form-control form-control-user @error('kelasId')
                        is-invalid @enderror" name="kelasId">
                        <option disabled selected>{{__('Pilih Kelas')}}</option>
                        @foreach($dataKelas as $kelas)
                            <option value="{{$kelas->id}}">{{$kelas->namaKelas}}</option>
                        @endforeach
                    </select>

                        @error('kelasId')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">NISN</label>
                        <input type="number" class="form-control @error('nisn') is-invalid @enderror"
                        id="niyp" name="nisn">

                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">NIK</label>
                        <input type="number" class="form-control @error('nik') is-invalid @enderror"
                        id="niyp" name="nik">

                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                        id="namaSiswa" name="tempat">

                        @error('tempat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="namaSiswa" name="tglLahir">

                        @error('tglLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Umur</label>
                        <input type="number" maxlength="2" class="form-control @error('umur') is-invalid @enderror"
                        id="namaSiswa" name="umur">

                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Alamat</label>
                        <input type="number" maxlength="2" class="form-control @error('umur') is-invalid @enderror"
                        id="namaSiswa" name="alamat">

                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">No Telepon</label>
                        <input type="number" minlength="10" maxlength="12" class="form-control @error('noHp') is-invalid @enderror"
                        id="noHp" name="noHp">

                        @error('noHp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Status</label>
                        <select type="text" class="form-control form-control-user @error('status')
                        is-invalid @enderror" name="status">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak-aktif">Tidak Aktif</option>
                        </select>

                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jenis Kelamin</label>
                        <select type="text" class="form-control form-control-user @error('gender')
                        is-invalid @enderror" name="gender">
                            <option value="" selected disabled>--- PILIH ---</option>
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
                        <label for="jabatan">Kebutuhan Khusus</label>
                        <select type="text" class="form-control form-control-user @error('kebKhusus')
                        is-invalid @enderror" name="kebKhusus">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="iya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                        </select>

                        @error('kebKhusus')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Disabilitas</label>
                        <select type="text" class="form-control form-control-user @error('disabilitas')
                        is-invalid @enderror" name="disabilitas">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="iya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                        </select>
                    </select>

                        @error('disabilitas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nomor KIP/PIP</label>
                        <input type="text" class="form-control @error('kip') is-invalid @enderror"
                        id="namaSiswa" name="kip">

                        @error('kip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nama Ayah Kandung</label>
                        <input type="text" class="form-control @error('namaAyah') is-invalid @enderror"
                        id="namaSiswa" name="namaAyah">

                        @error('namaAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nama Ibu Kandung</label>
                        <input type="text" class="form-control @error('namaIbu') is-invalid @enderror"
                        id="namaSiswa" name="namaIbu">

                        @error('namaIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nama Wali</label>
                        <input type="text" class="form-control @error('namaWali') is-invalid @enderror"
                        id="namaSiswa" name="namaWali">

                        @error('namaWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="form-group">
                        <a class="btn btn-primary" href="{{route('guru.index')}}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

