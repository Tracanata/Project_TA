<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OnePage Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/frontend/img/favicon.png" rel="icon">
    <link href="/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">SKPI TEKNIK UNSUR</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">SKPI</a></li>
                    <li><a class="nav-link scrollto" href="#services">VISI & MISI</a></li>
                    <li><a class="nav-link scrollto o" href="#portfolio">BERITA</a></li>
                    @auth
                    <li><a class="nav-link scrollto o" href="/dashboard">My Dashboard</a></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="getstarted scrollto">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </button>
                        </form>
                    </li>
                    @else
                    <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>SURAT KETERANGAN PENDAMPING IJAZAH (SKPI)</h1>
                    @auth
                    <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
                    @else
                    <h2>SILAHKAN LOGIN UNTUK MENGURUS PEMBUATAN SKPI</h2>
                    @endauth
                </div>
            </div>
            @auth
            <div class="text-center">
                <a href="/dashboard" class="btn-get-started scrollto">My Dashboard</a>
            </div>
            @else
            <div class="text-center">
                <a href="/login" class="btn-get-started scrollto">LOGIN</a>
            </div>
            @endauth
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Video Section ======= -->
        <section id="about-video" class="about-video">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                        <img src="/img/dokumen.png" class="img-fluid" alt="" width="490">
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3> Apa Itu Surat Keterangan Pedamping Ijazah (SKPI) ?</h3>
                        <p style="text-align: justify;">
                            Surat Keterangan Pendamping Ijazah (SKPI) adalah sebuah dokumen resmi yang diberikan oleh lembaga pendidikan kepada mahasiswa atau lulusan sebagai pelengkap dari ijazah. SKPI berfungsi untuk mencantumkan informasi mengenai prestasi akademik, kegiatan ekstrakurikuler, pengalaman kerja, serta keterampilan atau kompetensi lainnya yang relevan yang dimiliki oleh pemegangnya.
                        </p>
                        <p style="text-align: justify;">
                            Dengan adanya SKPI ini, diharapkan para lulusan atau mahasiswa memiliki sarana untuk menunjukkan kemampuan dan pengalaman tambahan selain dari pencapaian akademik yang tercantum dalam ijazah. SKPI ini juga seringkali digunakan untuk melengkapi portofolio saat melamar pekerjaan atau melanjutkan studi ke jenjang pendidikan yang lebih tinggi. Dokumen ini membantu untuk memberikan gambaran lebih lengkap mengenai profil dan kualifikasi seseorang kepada pihak yang berkepentingan.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Video Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi Misi dan Tujuan</h2>
                    <h3>VISI :</h3>
                    <p style="font-size: 15px; color: black;">Terwujudnya Fakultas yang unggul di bidang Rekayasa Teknologi berbasis kewirausahaan dan berstandar Internasional pada tahun 2031.</p>
                </div>
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                            <h3>MISI :</h3>
                            <ul class="text-decoration-none">
                                <li>Menyelenggarakan pendidikan dan pengajaran yang berkualitas, kredibel, dan kompetitif.</li>
                                <li>Melakukan pembinaan dan peningkatan kualitas Program Studi yang berdaya saing internasional</li>
                                <li>Melakukan Penelitian yang memiliki kontribusi bagi masyarakat dan Industri</li>
                                <li>Meningkatkan kualitas sumber daya dosen dan tenaga kependidikan melalui studi lanjut.</li>
                                <li>Mengembangkan kreativitas dalam Pengabdian Kepada Masyarakat yang bermanfaat.</li>
                                <li>Meningkatkan kualitas tata pamong.</li>
                                <li>Menjalin hubungan kerjasama yang luas dengan lembaga lain baik dalam maupun luar negeri</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>TUJUAN :</h3>
                            <ul class="text-decoration-none">
                                <li>Menghasilkan Lulusan yang berkualitas dan professional dalam bidang rekayasa teknologi.</li>
                                <li>Menghasilkan Program Studi yang berkualitas dan berdaya saing internasional.</li>
                                <li>Menghasilkan karya ilmiah dan publikasi yang terakreditasi nasional dan internasional.</li>
                                <li>Menghasilkan sumber daya dosen dan tenaga kependidikan yang professional.</li>
                                <li>Menghasilkan karya Pengabdian Masyarakat yang berdaya guna.</li>
                                <li>Menghasilkan Tata Pamong yang handal.</li>
                                <li>Menghasilkan kerjasama di bidang pendidikan dan pengajaran, penelitian dan pengabdian kepada masyarakat.</li>
                            </ul>
                        </div>

                    </div>

                </div>


            </div>
        </section><!-- End Sevices Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Berita</h2>
                    <p style="font-size: 30px;">COMING SOON!!</p>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/frontend/vendor/purecounter/purecounter_vanilla.js">
    </script>
    <script src="/frontend/vendor/aos/aos.js"></script>
    <script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/frontend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="frontend/js/main.js"></script>

</body>

</html>