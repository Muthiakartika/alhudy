@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Form Guru</h1>
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
                <h6 class="m-0 font-weight-bold text-success">Form Batch</h6>
            </div>
            <div class="card-body">
                <!-- Record batch -->
            <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="namaGuru">Nama Guru</label>
                    <span type="text" class="form-control"
                    id="namaGuru" name="nama">{{$guru->nama}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <span type="text" class="form-control"
                    id="jabatan" name="jabatan">{{$guru->jabatan}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Tempat Lahir</label>
                    <span type="text" class="form-control"
                    id="tempat" name="tempat">{{$guru->tempat}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Tanggal Lahir</label>
                    <span type="date" class="form-control"
                    id="tglLahir" name="tglLahir">{{$guru->tglLahir}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">NIPY</label>
                    <span type="number" class="form-control"
                    id="niyp" name="nipy">{{$guru->nipy}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">No Handphone</label>
                    <span type="number" class="form-control"
                    id="noHp" name="noHp" >{{$guru->noHp}}</span>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <img src="{{asset('storage/' .$guru->foto)}}" class="img-preview
                        img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 130px;" >
                </div>

                <div class="form-group">
                    <a href="{{route('guru.index')}}" class="btn btn-primary mr-2">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

