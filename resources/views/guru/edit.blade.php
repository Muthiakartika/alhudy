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
                <form method="POST" action="{{route('guru.update', $guru->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="namaGuru">Nama Guru<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                        id="namaGuru" name="nama" value="{{$guru->nama}}">

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                        id="jabatan" name="jabatan" value="{{$guru->jabatan}}">

                        @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Tempat Lahir<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                        id="tempat" name="tempat" value="{{$guru->tempat}}">

                        @error('tempat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Tanggal Lahir<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tglLahir') is-invalid @enderror"
                        id="tglLahir" name="tglLahir" value="{{$guru->tglLahir}}">

                        @error('tglLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">NIPY<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('nipy') is-invalid @enderror"
                        id="niyp" name="nipy" value="{{$guru->nipy}}">

                        @error('nipy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">No Handphone<span class="text-danger">*</span></label>
                        <input type="number" minlength="10" maxlength="12" class="form-control @error('noHp') is-invalid @enderror"
                        id="noHp" name="noHp" value="{{$guru->noHp}}">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Format: 6281xxxxx
                         </small>

                        @error('noHp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>File Uplaod<span class="text-danger">*</span></label>
                        <input type="hidden" name="oldImage" value="{{$guru->foto}}">
                        @if($guru->foto)
                            <img src="{{asset('storage/' .$guru->foto)}}" class="img-preview
                            img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 130px;" >
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

