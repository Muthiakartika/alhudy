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

    <title>{{ config('app.name') }} - Register</title>

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

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf

                            <input name="role" value="ortu" type="hidden">

                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input id="email" type="text" class="form-control form-control-user  @error('nama')
                                            is-invalid @enderror" name="nama" maxlength="255">

                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input id="email" type="email" class="form-control form-control-user @error('email')
                                            is-invalid @enderror" name="email" maxlength="255" value="{{old('email')}}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="nama">Password</label>
                                            <input id="password" type="password" class="form-control form-control-user @error('password')
                                                is-invalid @enderror" name="password" minlength="8" maxlength="64" >

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="nama">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control form-control-user"
                                                name="password_confirmation" minlength="8" maxlength="64" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-user btn-block">
                                        Daftar Akun
                                    </button>
                        </form>
                        <hr>
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="small text-success"  href="{{ route('password.request') }}">
                                   Lupa Password
                                </a>
                            </div>
                        @endif
                        <div class="text-center">
                            <a class="small text-success" href="{{'login'}}">Sudah punya akun? Masuk</a>
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
