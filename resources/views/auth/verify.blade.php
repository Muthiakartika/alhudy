<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>{{ config('app.name', 'Reset Password') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('admin/images/logo.svg')}}" alt="logo">
                            </div>

                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif

                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">{{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},</h6>
                            <form class="pt-3" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg
                                    font-weight-medium auth-form-btn" type="submit">click here to request another</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/todolist.js')}}"></script>
    <!-- endinject -->
</body>

</html>
