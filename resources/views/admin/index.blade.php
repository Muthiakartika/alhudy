@extends('layouts.app')

@section('content')

    {{-- Menghitung data yang aktif--}}
    @php
        $dataGuru = DB::table('gurus')->count();
        $dataMurid = DB::table('murids')->count();
        $dataGaleri = DB::table('galeris')->count();
        $dataPPDB = DB::table('ppdbs')->count();
    @endphp
        <!-- Begin Page Content -->
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->nama}} Dashboard</h1>
                <br>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Healthcares Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Jumlah Guru</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dataGuru}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Siswa</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dataMurid}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Jumlah PPDB</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dataPPDB}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-check fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Jumlah Kegiatan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dataGaleri}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-images fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Illustrations -->
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 49rem;"
                                     src="{{asset('admin/img/hudy_admin.png')}}" alt="Healthcare Admin">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

@endsection
