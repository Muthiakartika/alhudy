@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

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

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('murid.create')}}" class="btn btn-outline-success">Daftar Siswa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($dataMurid as $murid)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$murid->nisn}}</td>
                                            <td>{{$murid->nama}}</td>
                                            <td>{{$murid->kelas ? $murid->kelas->namaKelas : 'N/A'}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('murid.show', $murid->id)}}"
                                                    title="Tampilkan Data Siswa">
                                                    <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-warning btn-sm" href="{{route('murid.edit', $murid->id)}}" title="Edit Data Siswa">
                                                    <i class="fas fa-pen"></i></a>
                                                 <!-- Button to trigger the modal -->
                                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$murid->id}}" title="Hapus Data Siswa">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{$murid->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$murid->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{$murid->id}}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data siswa ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="{{ route('murid.destroy', $murid->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->
@endsection
