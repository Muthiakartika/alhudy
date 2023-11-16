@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
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
                <h6 class="m-0 font-weight-bold text-success">Form Siswa</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Siswa-->
                <form method="POST" action="{{route('murid.update', $murid->id)}}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="namaGuru">Nama Siswa<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama" placeholder="Nama Siswa" value="{{$murid->nama}}">

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Kelas<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('kelasId')
                            is-invalid @enderror" name="kelasId">
                            <option disabled selected>{{__('Pilih Kelas')}}</option>
                            @foreach($dataKelas as $kelas)
                                <option {{old('kelasId', $murid->kelasId) == $kelas->id ? 'selected' : ''}}
                                    value="{{$kelas->id}}">{{$kelas->namaKelas}}</option>
                            @endforeach
                        </select>

                        @error('kelasId')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">NISN<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nisn') is-invalid @enderror"
                        id="niyp" name="nisn" value="{{$murid->nisn}}">

                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">NIK<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nik') is-invalid @enderror"
                        id="niyp" name="nik" value="{{$murid->nik}}">

                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tempat Lahir<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                        id="namaSiswa" name="tempat" value="{{$murid->tempat}}">

                        @error('tempat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Tanggal Lahir<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="namaSiswa" name="tglLahir" value="{{$murid->tglLahir}}">

                        @error('tglLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Umur<span class="text-danger">*</span></label>
                        <input type="number" maxlength="2" class="form-control @error('umur') is-invalid @enderror"
                        id="namaSiswa" name="umur" value="{{$murid->umur}}">

                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Alamat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('umur') is-invalid @enderror"
                        id="namaSiswa" name="alamat" value="{{$murid->alamat}}">

                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">No Telepon</label>
                        <input type="number" minlength="10" maxlength="12" class="form-control @error('noHp') is-invalid @enderror"
                        id="noHp" name="noHp" value="{{$murid->noHp}}">

                        @error('noHp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Status<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('status')
                        is-invalid @enderror" name="status">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="aktif" {{ old('status') == 'aktif' || (isset($murid) && $murid->status == 'aktif') ? 'selected' : '' }}>Aktif</option>
                            <option value="tidak-aktif"> {{ old('status') == 'tidak-aktif' || (isset($murid) && $murid->status == 'tidak-aktif') ? 'selected' : '' }}Tidak Aktif</option>
                        </select>

                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jenis Kelamin<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('gender')
                        is-invalid @enderror" name="gender">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="laki_laki" {{ old('gender') == 'laki_laki' || (isset($murid) && $murid->gender == 'laki_laki') ? 'selected' : '' }}>Laki - Laki</option>
                            <option value="perempuan" {{ old('gender') == 'perempuan' || (isset($murid) && $murid->gender == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
                        </select>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Kebutuhan Khusus<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('kebKhusus')
                        is-invalid @enderror" name="kebKhusus">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="iya" {{ old('kebKhusus') == 'iya' || (isset($murid) && $murid->kebKhusus == 'iya') ? 'selected' : '' }}>Ada</option>
                            <option value="tidak" {{ old('kebKhusus') == 'tidak' || (isset($murid) && $murid->kebKhusus == 'tidak') ? 'selected' : '' }}>Tidak Ada</option>
                        </select>

                        @error('kebKhusus')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Disabilitas<span class="text-danger">*</span></label>
                        <select type="text" class="form-control form-control-user @error('disabilitas')
                        is-invalid @enderror" name="disabilitas">
                            <option value="" selected disabled>--- PILIH ---</option>
                            <option value="iya" {{ old('disabilitas') == 'iya' || (isset($murid) && $murid->disabilitas == 'iya') ? 'selected' : '' }}>Ada</option>
                            <option value="tidak" {{ old('disabilitas') == 'tidak' || (isset($murid) && $murid->disabilitas == 'tidak') ? 'selected' : '' }}>Tidak Ada</option>
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
                        id="namaSiswa" name="kip" value="{{$murid->kip}}">

                        @error('kip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="namaGuru">Nama Ayah Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaAyah') is-invalid @enderror"
                        id="namaSiswa" name="namaAyah" value="{{$murid->namaAyah}}">

                        @error('namaAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="namaGuru">Nama Ibu Kandung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('namaIbu') is-invalid @enderror"
                        id="namaSiswa" name="namaIbu" value="{{$murid->namaIbu}}">

                        @error('namaIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nama Wali</label>
                        <input type="text" class="form-control @error('namaWali') is-invalid @enderror"
                        id="namaSiswa" name="namaWali" value="{{$murid->namaWali}}">

                        @error('namaWali')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <a class="btn btn-primary" href="{{route('murid.index')}}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

