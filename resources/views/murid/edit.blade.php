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
                <form method="POST" action="{{route('murid.update', $murid->id)}}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="namaGuru">Nama Siswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="namaSiswa" name="nama" placeholder="Nama Siswa" value="{{$murid->nama}}">

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
                        <label for="jabatan">NISN</label>
                        <input type="number" class="form-control @error('nisn') is-invalid @enderror"
                        id="niyp" name="nisn" placeholder="NISN" value="{{$murid->nisn}}">

                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaGuru">Nama Ayah</label>
                        <input type="text" class="form-control @error('namaAyah') is-invalid @enderror"
                        id="namaSiswa" name="namaAyah" placeholder="Nama Guru" value="{{$murid->namaAyah}}">

                        @error('namaAyah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="namaGuru">Nama Ibu</label>
                        <input type="text" class="form-control @error('namaIbu') is-invalid @enderror"
                        id="namaSiswa" name="namaIbu" placeholder="Nama Guru" value="{{$murid->namaIbu}}">

                        @error('namaIbu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">No Handphone</label>
                        <input type="number" minlength="10" maxlength="12" class="form-control @error('noHp') is-invalid @enderror"
                        id="noHp" name="noHp" placeholder="No Handphone" value="{{$murid->noHp}}">

                        @error('noHp')
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

