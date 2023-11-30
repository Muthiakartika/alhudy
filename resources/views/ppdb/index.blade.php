@extends('layouts.app')

@section('content')

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
                <h1 class="h3 mb-0 text-gray-800">Assalamualaikum, {{auth()->user()->nama}}</h1>
                <br>
            </div>

            <!-- Content Row -->
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 49rem;"
                                     src="{{asset('admin/img/hudy_ortu.png')}}" alt="Healthcare Admin">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

@endsection
