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
                <form method="POST" action="{{route('kegiatan.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        id="namaGuru" name="judul">

                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan</label>
                        @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <input id="keterangan" type="hidden" name="keterangan">
                        <trix-editor input="keterangan"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        <input class="form-control-file @error('foto') is-invalid @enderror"
                               type="file" name="foto" id="image" onchange="previewImage()">

                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <a class="btn btn-primary" href="{{route('kegiatan.index')}}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        document.addEventListener('trix-file-accept', function(event){
            event.preventDefault();
        })
    </script>
@endsection

