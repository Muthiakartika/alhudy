<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="icon" href="{{asset('admin/img/alhudy-fav.png')}}" type="img/png">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-success">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                {{-- <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                </div> --}}

                                <!-- Tambahkan gambar di bawah tulisan -->
                                <div class="text-center mb-4">
                                    <img src="{{asset('admin/img/sidelogo.png')}}" alt="Foto Selamat Datang" class="img-fluid" style="width: 230px; height: auto;">
                                </div>

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

                                <form class="user" method="POST" action="{{ route('login') }}">

                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input id="email" type="email" class="form-control form-control-user  @error('email')
                                            is-invalid @enderror" name="email" maxlength="255" value="{{old('email')}}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Password</label>
                                        <input id="password" type="password" class="form-control form-control-user @error('password')
                                            is-invalid @enderror" name="password" minlength="8" maxlength="64">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                   name="remember">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                                <hr>


                                @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small text-success"  href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <a class="small text-success" href="{{route('register')}}">Daftar Akun!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.js')}}"></script>

</body>

</html>
