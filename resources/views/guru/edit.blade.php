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
                <h6 class="m-0 font-weight-bold text-success">Form Guru</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Guru-->
                <form method="POST" action="{{route('guru.update', $guru->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="namaGuru">Nama Guru</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                        id="namaGuru" name="nama" placeholder="Nama Guru" value="{{$guru->nama}}">

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                        id="jabatan" name="jabatan" placeholder="Jabatan" value="{{$guru->nama}}">

                        @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                        id="tempat" name="tempat" placeholder="Tempat Lahir" value="{{$guru->tempat}}">

                        @error('tempat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir" value="{{$guru->tglLahir}}">

                        @error('tglLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">NIPY</label>
                        <input type="number" class="form-control @error('nipy') is-invalid @enderror"
                        id="niyp" name="nipy" placeholder="NIPY" value="{{$guru->nipy}}">

                        @error('nipy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">No Handphone</label>
                        <input type="number" minlength="10" maxlength="12" class="form-control @error('noHp') is-invalid @enderror"
                        id="noHp" name="noHp" placeholder="No Handphone" value="{{$guru->noHp}}">

                        @error('noHp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>File Uplaod</label>
                        <input type="hidden" name="oldImage" value="{{$guru->foto}}">
                        @if($guru->foto)
                            <img src="{{asset('storage/' .$guru->foto)}}" class="img-preview
                            img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 150px;" >
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control-file @error('foto') is-invalid @enderror"
                               type="file" name="foto" id="image" onchange="previewImage()">

                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
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

