<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visi & Misi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{asset('master/images/alhudy-fav.png')}}" rel="icon" />
  <link href="{{asset('master/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('master/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('master/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/bootstrap-icons/bootstrap-icons.cs')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/remixicon/remixicon.css" rel=')}}" rel="stylesheet">
  <link href="{{asset('master/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet"


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
			<li><a href="{{route('tenaga-pendidik')}}">Direktori Guru dan Tenaga Kependidikan</a></li>
			<li><a class="nav-link scrollto active" href="{{route('visi-misi')}}">Visi & Misi</a></li>
			<li><a href="{{route('galeri')}}">Galeri</a></li>
			<li><a href="#">Kontak Kami</a></li>
			<li><a href="{{ route('login') }}">Login</a></li>

		</ul>
		<i class="bx bx-menu mobile-nav-toggle"></i>
	  </nav>

      <!-- <a href="login.html" class="get-started-btn">Login</a> -->
    </div>
  </header><!-- End Header -->



  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container" data-aos="fade-in">
		<section id="social">
			<div class="section-title row gy-4 mt-5 justify-content-center">
				<h2><u>Visi dan Misi</u></h2>
			</div>
		</section>
      </div>
    </div>
	<!-- End Breadcrumbs -->

	<!-- Social Media Section -->
	<section id="social">
		<div class="container" data-aos="fade-in">
			<div class="row justify-content-center">
				<div class="col-xl-12">
					<div class="icon-box">
					<img src="{{asset('master/images/visi_misi.png')}}" class="img-fluid" alt="">

					<h2><br>Visi</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nibh mauris cursus mattis molestie a iaculis at.
					Quis commodo odio aenean sed adipiscing diam donec. Odio eu feugiat pretium nibh ipsum consequat nisl. Et pharetra pharetra massa massa ultricies mi quis. Laoreet sit amet cursus sit.
					Id ornare arcu odio ut sem. At imperdiet dui accumsan sit amet nulla. Tellus rutrum tellus pellentesque eu. Nulla facilisi nullam vehicula ipsum a. </p>
					<br>
					<h2>Misi</h2>
					 <ol>
					   <li>Senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada.</li>
					   <li>Ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Dignissim enim sit amet venenatis urna.</li>
					   <li>Sem integer vitae justo eget magna fermentum iaculis eu non. A scelerisque purus semper eget duis at. Vulputate ut pharetra sit amet aliquam.</li>
					   <li>Ultrices vitae auctor eu augue ut lectus arcu bibendum. Donec ac odio tempor orci dapibus ultrices in iaculis. Tristique risus nec feugiat in fermentum posuere. Senectus et netus et malesuada fames ac.</li>
					 </ol>
					</div>
				</div>
			</div>
		</div>
		<br>
	</section>
  </main><!-- End #main -->

  <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <img src="{{asset('master/images/sidelogo.png')}}" alt="" width="150" />
                                <p>
                                    <br />
                                    <strong>Phone:</strong> +62 8179 7332 11<br />
                                    <strong>Email:</strong> testing@gmail.com<br />
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
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak Kami</a></li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <div class="social-links mt-xxl-5">
                                <a href="#" target="_blank" class="instagram"
                                    ><i class="bx bxl-instagram"></i
                                ></a>
                                <a href="#" target="_blank" class="facebook"
                                    ><i class="bx bxl-facebook"></i
                                ></a>
                                <a href="https://wa.me/628179733211" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                                <a href="mailto:ryuagusta@gmail.com" class="google"><i class="bx bxl-google"></i></a>
                                <a href="#" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Al-Hudy</span></strong>. All Rights Reserved
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
