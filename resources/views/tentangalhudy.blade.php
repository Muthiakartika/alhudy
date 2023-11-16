<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Direktori Guru dan Tenaga Kependidikan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{asset('master/images/alhudy-fav.png')}}" rel="icon" />
  <link href="{{asset('master/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('master/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('master/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">
	  <h1 class="logo me-auto me-lg-0">
		<a href="/"><img src="{{asset('master/images/sidelogo.png')}}"></a>
	  </h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a class="nav-link scrollto active" href="{{route('tenaga-pendidik')}}">Direktori Guru dan Tenaga Kependidikan</a></li>
			<li><a href="{{route('visi-misi')}}">Visi & Misi</a></li>
			<li><a href="{{route('galeri')}}">Galeri</a></li>
			<li><a href="{{route('kontak-kami')}}">Kontak Kami</a></li>
			<li><a href="{{ route('login') }}">Login</a></li>

		</ul>
		<i class="bx bx-menu mobile-nav-toggle"></i>
	  </nav>

      <!-- <a href="login.html" class="get-started-btn">Login</a> -->
    </div>
  </header><!-- End Header -->

	<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
		<section id="social" data-aos="fade-up">
			<div class="section-title row gy-4 mt-5 justify-content-center" >
				<h2><u>Direktori Guru dan Tenaga Kependidikan</u></h2>
			</div>
		</section>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">

    @if ($guru->count())
        <div class="container" data-aos="fade-up">
            <div class="row"   data-aos="zoom-in" data-aos-delay="100">
                @foreach ($guru as $dataGuru)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{asset('storage/' .$dataGuru->foto)}}" class="img-fluid" style="height: 401px; width: 301px;"
                            alt="tenaga pendidik">
                            <div class="member-content">
                                <h4><b>{{$dataGuru->jabatan}}</b></h4>
                                <h5>{{$dataGuru->nama}}</h5>
                            <div class="social">
                            <a href="https://wa.me/{{ str_replace(['+', ' ', '-'], '', $dataGuru->noHp) }}"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
		</div>
    @else
        <div class="container" data-aos="fade-up">
            <div class="row"   data-aos="zoom-in" data-aos-delay="100">
                <div class="card mb-3">
                <img class="card-img-top" src="{{asset('master/images/file-error.jpg')}}" alt="Data Tidak Ditemukan" width="1260" height="272">
                <div class="card-body">
                    <center>
                        <h1 class="card-title">Data Tidak Ditemukan</h1>
                        <p class="card-text">Maaf, tidak ada data yang bisa ditampilkan pada saat ini</p>
                    </center>
                </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="container" data-aos="fade-in">
                <section id="social">
                    <div class="section-title row gy-4 mt-5 justify-content-center">

                    </div>
                </section>
            </div>
        </div>
    @endif

      </div>
    </section><!-- End Trainers Section -->
  </main><!-- End #main -->

  <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <img src="{{asset('master/images/sidelogo.png')}}" alt="" width="150" />
                                <p>
                                    <br/>
                                    <strong>Phone:</strong> +62 8179 7332 11<br />
                                    <strong>Email:</strong> yayasansinhudy@gmail.com<br />
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Al-Hudy</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{route('tenaga-pendidik')}}">Direktori Guru dan Tenaga Kependidikan</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{route('visi-misi')}}">Visi & Misi</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Al-Hudy</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{route('galeri')}}">Galeri</a></li>
                                <li><i class="bx bx-chevron-right"></i><a href="{{route('kontak-kami')}}">Kontak Kami</a></li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <div class="social-links mt-xxl-5">
                                <a href="https://www.instagram.com/mtsalhudy2019/?hl=id" target="_blank" class="instagram"
                                    ><i class="bx bxl-instagram"></i
                                ></a>
                                <a href="https://www.facebook.com/mialhudy/?locale=id_ID" target="_blank" class="facebook"
                                    ><i class="bx bxl-facebook"></i
                                ></a>
                                <a href="https://wa.me/628179733211" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                                <a href="mailto:yayasansinhudy@gmail.com" class="google"><i class="bx bxl-google"></i></a>
                                <a href="https://www.youtube.com/channel/UCL_J8g2vIvwkcIiL8WCjtaQ" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Al-Hudy</span></strong
                    >. All Rights Reserved
                </div>
            </div>
        </footer>

  <!-- End Footer -->

  <div id="preloader"></div>

   <!-- Vendor JS Files -->
   <script src="{{asset('master/assets/vendor/purecounter/purecounter.js')}}"></script>
   <script src="{{asset('master/assets/vendor/aos/aos.js')}}"></script>
   <script src="{{asset('master/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('master/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('master/assets/vendor/php-email-form/validate.js')}}"></script>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


   <!-- Template Main JS File -->
   <script src="{{asset('master/assets/js/main.js')}}"></script>

</body>

</html>
