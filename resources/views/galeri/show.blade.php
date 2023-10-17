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
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan</label>
                        <span type="text" class="form-control" id="namaGuru" name="judul">{{$galeri->judul}}</span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan</label>
                        <textarea  class="form-control" name="keterangan" rows="3" readonly>{{$galeri->keterangan}}</textarea>

                        @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                        <img src="{{asset('storage/' .$galeri->foto)}}" class="img-preview
                        img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 150px;" >
                    </div>

                    <div class="form-group">
                        <a href="{{route('kegiatan.index')}}" class="btn btn-primary mr-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

