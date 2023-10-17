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
                <h6 class="m-0 font-weight-bold text-success">Form Kegiatan</h6>
            </div>
            <div class="card-body">
                <!-- Mengupdate data kegiatan-->
                <form method="POST" action="{{route('kegiatan.update', $galeri->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        id="namaGuru" name="judul" placeholder="Judul Kegiatan" value="{{$galeri->judul}}">

                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan</label>
                        <textarea  class="form-control @error('keterangan') is-invalid @enderror"
                        id="jabatan" name="keterangan" placeholder="Keterangan" rows="3">{{$galeri->keterangan}}</textarea>

                        @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="hidden" name="oldImage" value="{{$galeri->foto}}">
                        @if($galeri->foto)
                            <img src="{{asset('storage/' .$galeri->foto)}}" class="img-preview
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

