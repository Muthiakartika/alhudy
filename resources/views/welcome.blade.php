<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Madrasah Ibtidaiyah Al Hudy</title>

        <meta property="og:title" content="Madrasah Ibtidaiyah Al Hudy" />
        <meta property="og:type" content="”website”" />
        <meta property="og:image" content="{{asset('master/images/testing1.jpg')}}" />
		<!-- <meta property="og:image" content="./images/hero-bg-gray.png" /> -->

        <!-- Favicons -->
        <link href="{{asset('master/images/alhudy-fav.png')}}" rel="icon" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('master/libraries/bootstrap/css/bootstrap.min.css')}}" />
        <!-- Library CSS -->
        <link rel="stylesheet" href="{{asset('master/libraries/boxicons/css/boxicons.min.css')}}" />

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('master/css/styles.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/navbar.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/gallery.css')}}" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />
    </head>
    <body>
        <!-- Navbar -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-lg-between">
				<h1 class="logo me-auto me-lg-0">
					<a href="/"><img src="{{asset('master/images/sidelogo.png')}}"></a>
                </h1>


                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/">Home</a></li>
						<li><a href="{{route('tenaga-pendidik')}}">Direktori Guru dan Tenaga Kependidikan</a></li>
						<li><a href="{{route('visi-misi')}}">Visi & Misi</a></li>
						<li><a href="{{route('galeri')}}">Galeri</a></li>
						<li><a href="{{route('kontak-kami')}}">Kontak Kami</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>

                    </ul>
                    <i class="bx bx-menu mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <!-- End Navbar -->

        <!-- Hero -->
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Al-Hudy</h1>
                        <h1 class="color-gold">الهودي</h1>
                        <h2 class="content-tag">Mencetak Pengusaha Muslim Profesional</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <!-- Main -->
        <main>
            <!-- About Us Section-->
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2">
                            <img src="{{asset('master/images/kepala-sekolah.png')}}" class="img-fluid" alt="Kepala Sekolah">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                            <div class="section-title">
                                <h3><span class="content-t1">Sambutan</span><span class="color-green"> Kepala Sekolah</span></h3>
                            </div>
                            <br />
                            <p class="content-p1">
                                Assalamu'alaikum Wr. Wb
                                <br>
                                Puji syukur kita panjatkan kehadirat Allah SWT atas segala limpahan rahmat dan karunia-Nya.
                                MI Al Hudy berkomitmen untuk meningkatkan kualitas pendidikan Islam, membebaskan peserta didik
                                dari ketidaktahuan, ketidakmampuan, dan ketidakberdayaan. Kami mengajak seluruh pemangku kepentingan,
                                terutama orang tua dan masyarakat, untuk bersama-sama mendukung kemajuan pendidikan.
                                Saran dan kritik membangun dari masyarakat sangat diharapkan demi peningkatan mutu pendidikan di MI Al Hudy.
                                Terima kasih atas partisipasi dan kerjasama. Semoga MI Al Hudy terus berkembang positif untuk masa depan yang lebih baik.
                                <br>
                                Wassalamu'alaikum Wr. Wb
                            </p>
                        </div>
                    </div>
                    <br /><br /><br /><br />
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('master/images/hudy-bg.png')}}" class="img-fluid" alt="al hudy">
                        </div>
                        <div class="col-lg-6 type">
                            <h3 class="text-start content-t2">Tujuan Kelembagaan</h3>
                            <p class="content-p1">
                                Memberikan bekal kemampuan dasar Agama Islam yang baik melalui membaca, menulis,
                                dan praktek Ubudiyah sehari-hari sehingga siswa mampu mengaplikasikan keilmuanya
                                nanti di Masyarakat, dan tentu saja Pendidikan Umum seperti menghitung, juga di ajarkan sebagai
                                penyeimbang Ilmu yang di berikan. Siswa juga diberikan Skill Entrepreneurship melalui
                                Pendidikan Kewirausahaan dan Pelatihan Skill melalui Creative Corner dan Outing Class.
                                Dengan semua pendidikan yang di ajarkan, Lembaga yakin siswa MI Al-Hudy siap untuk menghadapi
                                tantangan di masa depan mereka
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section-->

            <!-- Gallery Section -->
            <section id="gallery" class="gallery">
                <div class="container">
                    <div class="section-title">
                        <div class="section-title">
                            <h2><span class="color-green">IMAGE</span> GALLERY</h2>
                        </div>
                        <br />
                    </div>
                    <div class="row gallery-container">
                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about4.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about4.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about5.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about5.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about4.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about4.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about5.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about5.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about4.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about4.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="{{asset('master/images/gallery/about5.jpg')}}" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="{{asset('master/images/gallery/about5.jpg')}}" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End gallery Section -->

            <!-- Social Media Section -->
            <section id="social">
                <div class="container">
                    <div class="section-title">
                        <h2>SOCIAL MEDIA <span class="color-green">&</span> CONTACTS</h2>
                    </div>
                    <div class="row gy-4 mt-5 justify-content-center">
                        <a href="instagram.com">
						<div class="col-xl-2 col-md-4">

							<div class="icon-box">
                                <i class="bx bxl-instagram"></i>
                                <h3><a href="https://www.instagram.com/mtsalhudy2019/?hl=id" target="_blank">Instagram</a></h3>
                            </div>

                        </div>
						</a>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-facebook"></i>
                                <h3><a href="https://www.facebook.com/mialhudy/?locale=id_ID" target="_blank">Facebook</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-whatsapp"></i>
                                <h3><a href="#" target="_blank">WhatsApp</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-google"></i>
                                <h3><a href="mailto:yayasansinhudy@gmail.com">Email</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-youtube"></i>
                                <h3><a href="https://www.youtube.com/channel/UCL_J8g2vIvwkcIiL8WCjtaQ" target="_blank">Youtube</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <br /><br /><br /><br />
                    <!-- Google Maps -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.0047211793859!2d115.20095292854697!3d-8.689753399457665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240d83b22258d%3A0x9714ad32cf5a1aa7!2sMI%20Al%20Hudy!5e0!3m2!1sen!2sid!4v1699269410148!5m2!1sen!2sid"
                        width="100%"
                        height="500"
                        frameborder="0"
                        style="border: 0"
                        allowfullscreen
                    ></iframe>
                </div>
            </section>
        </main>
        <!-- Footer Section -->
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

        <!-- Javascript -->
        <!-- Bootstrap -->
        <script src="{{asset('master/libraries/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Libraries Javascript -->
        <script src="{{asset('master/libraries/navbar-animation/navbar.js')}}"></script>

        <!-- Javascript -->
        <script src="{{asset('master/js/script.js')}}></script>
    </body>
</html>
