<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Madrasah Ibtidaiyah Al Hudy</title>

        <meta property="og:title" content="Madrasah Ibtidaiyah Al Hudy" />
        <meta property="og:type" content="”website”" />
        <meta property="og:image" content="<?php echo e(asset('master/images/testing1.jpg')); ?>" />
		<!-- <meta property="og:image" content="./images/hero-bg-gray.png" /> -->


        <!-- Favicons -->
        <link href="<?php echo e(asset('master/images/alhudy-fav.png')); ?>" rel="icon" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('master/libraries/bootstrap/css/bootstrap.min.css')); ?>" />
        <!-- Library CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('master/libraries/boxicons/css/boxicons.min.css')); ?>" />

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('master/css/styles.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('master/css/navbar.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('master/css/gallery.css')); ?>" />

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
					<a href="/"><img src="<?php echo e(asset('master/images/sidelogo.png')); ?>"></a>
                </h1>


                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/">Home</a></li>
						<li><a href="<?php echo e(route('tenaga-pendidik')); ?>">Direktori Guru dan Tenaga Kependidikan</a></li>
						<li><a href="<?php echo e(route('visi-misi')); ?>">Visi & Misi</a></li>
						<li><a href="<?php echo e(route('galeri')); ?>">Galeri</a></li>
						<li><a href="#">Kontak Kami</a></li>
						<li><a href="<?php echo e(route('login')); ?>">Login</a></li>

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
                        <h2 class="content-tag">Lorem ipsum dolor sit amet</h2>
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
                            <img src="<?php echo e(asset('master/images/about5.jpg')); ?>" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                            <div class="section-title">
                                <h2><span class="content-t1">Lorem</span><span class="color-green"> Ipsum</span></h2>
                            </div>
                            <br />
                            <p class="content-p1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Dolor sed viverra ipsum nunc aliquet. Tristique et egestas quis ipsum.
								Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur.
								Pharetra convallis posuere morbi leo urna molestie at elementum.
								Tellus id interdum velit laoreet id donec ultrices tincidunt.
								Elementum sagittis vitae et leo. Tempor nec feugiat nisl pretium fusce id velit.
								Faucibus vitae aliquet nec ullamcorper sit. Vel pretium lectus quam id leo in vitae turpis.
                            </p>
                        </div>
                    </div>
                    <br /><br /><br /><br />
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo e(asset('master/images/about4.jpg')); ?>" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-6 type">
                            <h3 class="text-start content-t2">Lorem ipsum dolor</h3>
                            <div class="icon-box mt-5">
                                <i class="bx bx-cube-alt"></i>
                                <h4 class="content-t3">Lorem ipsum dolor</h4>
                                <p class="content-p2">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet. Tristique et egestas quis ipsum.</p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class="bx bx-cube-alt"></i>
                                <h4 class="content-t4">Lorem ipsum dolorl</h4>
                                <p class="content-p3">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet. Tristique et egestas quis ipsum.</p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class="bx bx-cube-alt"></i>
                                <h4 class="content-t5">Lorem ipsum dolor</h4>
                                <p class="content-p4">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet. Tristique et egestas quis ipsum.</p>
                            </div>
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
                                <img src="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about4.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 gallery-item filter-web">
                            <div class="gallery-wrap">
                                <img src="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" class="img-fluid" alt="" />
                                <div class="gallery-info">
                                    <h4>Click to open</h4>
                                </div>
                                <div class="gallery-links">
                                    <a href="<?php echo e(asset('master/images/gallery/about5.jpg')); ?>" target="_blank"><i class="bx bx-zoom-in"></i></a>
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
                                <h3><a href="#" target="_blank">Instagram</a></h3>
                            </div>

                        </div>
						</a>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-facebook"></i>
                                <h3><a href="#" target="_blank">Facebook</a></h3>
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
                                <h3><a href="#">Email</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="icon-box">
                                <i class="bx bxl-github"></i>
                                <h3><a href="#" target="_blank">Github</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <br /><br /><br /><br />
                    <!-- Google Maps -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.6353316141813!2d115.19615231478515!3d-8.820286993665807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cfb7a72de11516e!2zOMKwNDknMTMuMCJTIDExNcKwMTEnNTQuMCJF!5e0!3m2!1sid!2sid!4v1652331562631!5m2!1sid!2sid"
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
                                <img src="<?php echo e(asset('master/images/sidelogo.png')); ?>" alt="" width="150" />
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
                                <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('tenaga-pendidik')); ?>">Direktori Guru dan Tenaga Kependidikan</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('visi-misi')); ?>">Visi & Misi</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Al-Hudy</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('galeri')); ?>">Galeri</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak Kami</a></li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="<?php echo e(route('login')); ?>">Login</a>
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
                    &copy; Copyright <strong><span>Al-Hudy</span></strong
                    >. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Javascript -->
        <!-- Bootstrap -->
        <script src="<?php echo e(asset('master/libraries/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Libraries Javascript -->
        <script src="<?php echo e(asset('master/libraries/navbar-animation/navbar.js')); ?>"></script>

        <!-- Javascript -->
        <script src="<?php echo e(asset('master/js/script.js')); ?>></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/welcome.blade.php ENDPATH**/ ?>