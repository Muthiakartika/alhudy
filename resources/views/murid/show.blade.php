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
                <!-- Record batch -->
            <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="namaGuru">Nama Siswa</label>
                    <span type="text" class="form-control"
                    id="namaGuru" name="nama">{{$murid->nama}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Kelas</label>
                    <span type="text" class="form-control"
                    id="jabatan" name="kelas">{{$murid->kelas ? $murid->kelas->namaKelas : 'N/A'}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">NISN</label>
                    <span type="text" class="form-control"
                    id="tempat" name="nisn">{{$murid->nisn}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Nama Ayah</label>
                    <span type="text" class="form-control"
                    id="tglLahir" name="namaAyah">{{$murid->namaAyah}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Nama Ibu</label>
                    <span type="text" class="form-control"
                    id="tglLahir" name="namaIbu">{{$murid->namaIbu}}</span>
                </div>

                <div class="form-group">
                    <label for="jabatan">No Handphone</label>
                    <span type="number" class="form-control"
                    id="noHp" name="noHp" >{{$murid->noHp}}</span>
                </div>

                <a href="{{route('murid.index')}}" class="btn btn-primary mr-2">Back</a>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

