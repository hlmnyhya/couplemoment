<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Couple Moment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/img/icon-couple.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/icon-couple.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('frontend/img/icon-couple.png') }}" alt="">
                <span>Couple Moment</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#desain">Preset / Desain</a></li>
                    <li><a class="nav-link scrollto" href="#harga">Harga</a></li>
                    <li><a class="nav-link scrollto" href="#portofolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto"
                            href="https://wa.me/+6281528464820?text=Hi!%20Couple Moment,%20apakah%20saya%20bisa%20bisa%20bergabung%20menjadi%20bagian%20dari%20reseller%20?">Menjadi
                            Reseller</a></li>
                    {{-- <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>

                    <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Column 1 link 1</a>
                                <a href="#">Column 1 link 2</a>
                                <a href="#">Column 1 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 2 link 1</a>
                                <a href="#">Column 2 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 3 link 1</a>
                                <a href="#">Column 3 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 4 link 1</a>
                                <a href="#">Column 4 link 2</a>
                                <a href="#">Column 4 link 3</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    <li><a class="getstarted scrollto" href="#about">Daftar / Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="home" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">When your -</h1>
                    <h2 data-aos="fade-up">Dream Wedding Come True💕</h2>
                    <p data-aos="fade-up" data-aos-delay="400">Buat undangan digitalmu sendiri dan jadikan pernikahan
                        impianmu menjadi nyata !</p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Daftar Sekarang</span>
                                {{-- <i class="bi bi-arrow-right"></i> --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('frontend/img/pic-1.png') }}" class="img-fluid" style="max-width: 70%;"
                        alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Features Section ======= -->
        <section class="features">

            <div class="container" data-aos="fade-up">
                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <h3>Fitur yang Ditawarkan</h3>

                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset('frontend/img/features-3.png') }}"  class="img-fluid p-4" alt="" style="max-width: 85%;margin-bottom: 20px;">>
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bi bi-envelope-heart"></i>
                                    <div>
                                        <h4>Costum Nama Tamu Sepuasnya</h4>
                                        <p style="text-align:justify;">Undang sebanyak mungkin tamu yang kamu inginkan
                                            tanpa batasan. Buat secara personal, untuk mengundang tamu yang lebih sopan.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi bi-person-hearts"></i>
                                    <div>
                                        <h4>Detail Mempelai</h4>
                                        <p style="text-align:justify;">Lihat informasi lengkap kedua mempelai, seperti
                                            nama mempelai, nama orang tua, dan tautan akun instagram mempelai.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-calendar-heart"></i>
                                    <div>
                                        <h4>Detail Acara</h4>
                                        <p style="text-align:justify;">Menampilkan tanggal, waktu, dan lokasi untuk
                                            akad & resepsi pernikahanmu.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-camera"></i>
                                    <div>
                                        <h4>Galeri Foto & Video</h4>
                                        <p style="text-align:justify;">Unggah foto & video spesial atau momen
                                            prewedding di dalam undangan digitalmu.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-hourglass-split"></i>
                                    <div>
                                        <h4>Hitung Mundur</h4>
                                        <p style="text-align:justify;">Menampilkan waktu hitung mundur mulai dari saat
                                            pembuatan undangan hingga hari H resepsi. Jangan biarkan tamu kamu
                                            kehilangan momen spesialmu.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-house-heart"></i>
                                    <div>
                                        <h4>Navigasi Lokal</h4>
                                        <p style="text-align:justify;">Jangan khawatir tamu undangan akan susah mencari
                                            tempat resepsimu. Couple Moment menyediakan petunjuk lokasi dengan integrasi
                                            dengan Google Maps.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-arrow-through-heart"></i>
                                    <div>
                                        <h4>Kisah Cintamu</h4>
                                        <p style="text-align:justify;">Beritahu tamu undangan kisah cintamu, contohnya
                                            kapan kalian bertemu, kapan kalian menyatakan cinta, dan kapan akhirnya
                                            lamaran itu tiba. Kisah cintamu akan terpajang rapi di undangan digitalmu.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-chat-heart reversed-icon"></i>
                                    <div>
                                        <h4>Kirim Salam dan Pastikan Kehadiran</h4>
                                        <p style="text-align:justify;">Mau mengetahui siapa saja yang hadir dan
                                            mengirimkan ucapan manis untuk pernikahanmu? Couple Moment menyediakan fitur
                                            kepada tamu undangan untuk dapat memberikan ucapan dan konfirmasi kehadiran
                                            langsung dalam undangan digitalmu.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->

            </div>

        </section><!-- End Features Section -->

        <!-- ======= About Section ======= -->
        <section class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>No. 1 Platform</h3>
                            <h2>Undangan Pernikahan Digital</h2>
                            <p>
                                Dapatkan Pernikahan Impianmu! Kreasikan Website Undangan Pernikahan dengan Mudah,
                                Hemat, dan Cepat. Dengan solusi terbaik kami, Anda dapat menciptakan pengalaman undangan
                                pernikahan yang tak terlupakan. Dari desain yang elegan hingga fitur hemat waktu, kami
                                menyediakan alat yang Anda butuhkan untuk membuat pernikahan Anda menjadi momen
                                berkesan. Mulailah perjalanan Anda menuju undangan pernikahan yang sempurna! 💑✨
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <section id="counts" class="counts">
                            <div class="row col-12" style="justify-content: center">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="count-box">
                                        <i class="bi bi-calendar3" style="color: #cad018;"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="999"
                                                data-purecounter-duration="1" class="purecounter"
                                                style="color: #cad018;"></span>
                                            <p>Undangan dalam proses peluncuran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="count-box">
                                        <i class="bi bi-envelope-paper-heart" style="color: #15be56;"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="999"
                                                data-purecounter-duration="2" class="purecounter"
                                                style="color: #15be56;"></span>
                                            <p>Undangan yang sedang berjalan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="count-box">
                                        <i class="bi bi-rocket-takeoff" style="color: #153cbe;"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="999"
                                                data-purecounter-duration="3" class="purecounter"
                                                style="color: #153cbe;"></span>
                                            <p>Undangan yang sudah diluncurkan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="count-box">
                                        <i class="bi bi-file-earmark-richtext"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="999"
                                                data-purecounter-duration="4" class="purecounter"></span>
                                            <p>Jumlah preset / desain undangan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="desain" class="portfolio" style="background-image: url('frontend/img/hero-bg.png')">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1440" height="209" viewBox="0 0 1440 209"
                fill="none">
                <path
                    d="M1446.1 208.304L1385.88 190.998C1325.66 173.367 1205.22 139.242 1084.73 121.611C964.243 104.305 843.701 104.305 723.095 125.998C602.49 147.367 481.819 191.242 361.265 195.304C240.711 199.367 120.27 165.242 60.0513 147.611L-0.168522 130.305L0.215 0.305126L60.4859 0.305126C120.757 0.305126 241.299 0.305126 361.841 0.305126C482.382 0.305126 602.924 0.305126 723.466 0.305126C844.008 0.305126 964.55 0.305126 1085.09 0.305126C1205.63 0.305126 1326.18 0.305126 1386.45 0.305126L1446.72 0.305126L1446.1 208.304Z"
                    fill="#FCFCFC" />
            </svg> --}}
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h1>Preset / Desain</h1>
                    <h2>Inovasi Kreatif dalam Bentuk Undangan Digital</h2>
                    <p>"Buat undangan pernikahan secara digital dengan mudah. Pilih template, lalu sesuaikan dengan
                        gaya
                        desainmu sendiri. Setelah selesai, kamu dapat langsung membagikannya kepada orang-orang
                        terdekatmu."</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Modern</li>
                            <li data-filter=".filter-card">Classic</li>
                            <li data-filter=".filter-web">Minimalist</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="frontend/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="harga" class="pricing" style="background-image: url('frontend/img/hero-bg1.png')">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h1>Harga</h1>
                    <h2>Pilih Paket dengan Harga Terbaik untuk Kamu</h2>
                    <p>"Segera manfaatkan promo 50% - penawaran terbatas!"</p>
                </header>

                <div class="row gy-4" style="place-content: center" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3 style="color: #65c600;">Paket Basic</h3>
                            <div class="price"><sup>Rp.</sup>0</div>
                            <div class="price2"><span> / per Bulan</span></div>
                            <img src="{{ asset('frontend/img/pricing-starter.png') }}" class="img-fluid"
                                alt="">
                            <hr style='border: 1px solid #000;'>
                            <ul>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Undangan <strong>( Template
                                        Terbatas )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Minggu Expired Undangan
                                </li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Lagu <strong>( Pilihan Lagu
                                        Terbatas )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Album <strong>( Maks. 5
                                        Foto )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>50 Guest Book</li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>Watermark</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #1c42ff;">Paket Premium</h3>
                            <div class="price"><sup>Rp.</sup>150.000</div>
                            <div class="price2"><span> / per Bulan</span></div>
                            <img src="{{ asset('frontend/img/pricing-business.png') }}" class="img-fluid"
                                alt="">
                            <hr style='border: 1px solid #000;'>
                            <ul>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>5 Undangan <strong>( Template
                                        Terbatas )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>2 Minggu Expired Undangan
                                </li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Lagu <strong>( Pilihan Lagu
                                        bebas )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Album <strong>( Maks. 10
                                        Foto )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>100 Guest Book</li>
                                <li class="na"><span class="bi bi-x-circle mr-5 mt-1"
                                        style="color: #c60000;margin-right: 10px;"></span>Watermark</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Paket Exclusive</h3>
                            <div class="price"><sup>Rp.</sup>300.000</div>
                            <div class="price2"><span> / per Bulan</span></div>
                            <img src="{{ asset('frontend/img/pricing-ultimate.png') }}" class="img-fluid"
                                alt="">
                            <hr style='border: 1px solid #000;'>
                            <ul>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>999+ Undangan <strong>( All
                                        Template )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Bulan Expired Undangan
                                </li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Lagu <strong>( Pilihan Lagu
                                        Bebas )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>1 Album <strong>( Maks. 20
                                        Foto )</strong></li>
                                <li><span class="bi bi-check-circle mr-5 mt-1"
                                        style="color: #65c600;margin-right: 10px;"></span>200 Guest Book</li>
                                <li class="na"><span class="bi bi-x-circle mr-5 mt-1"
                                        style="color: #c60000;margin-right: 10px;"></span>Watermark</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="portofolio" class="testimonials" style="background-image: url('frontend/img/hero-bg.png')">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h1>Portofolio</h1>
                    <h2>Testimonials</h2>
                    <p>"Kami selalu membuka diri untuk menerima ulasan, saran, dan kritik Anda yang berharga. Setiap
                        pandangan dari Anda bukan hanya sebagai masukan, tetapi sebagai bahan bakar yang mendorong
                        inovasi dan pengembangan kami. Jangan ragu untuk berbagi pengalaman Anda, karena bersama-sama,
                        kita membangun perjalanan yang lebih baik."</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-2.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-3.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-5.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" style="background-image: url('frontend/img/hero-bg1.png')">
            <header class="section-header">
                <h2>Contact</h2>
                <p>"Kami di sini untuk merespons setiap permintaan ataupun pertanyaan Anda."</p>
            </header>

            <div class="container" data-aos="fade-up">
                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <h3><i class="bi bi-telephone"></i>Call Us</h3>
                                    <p>+62 815-2846-4820</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <h3><i class="bi bi-envelope"></i>Email Us</h3>
                                    <p>cs@couplemoment.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <h3><i class="bi bi-geo-alt"></i>Address</h3>
                                    <p>Jl. A.Yani Km. 63, RT.18 / RW.3, Desa Panggung, Kecamatan Pelaihari,
                                        Kabupaten Tanah Laut, Provinsi Kalimantan Selatan, 70815</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <h3><i class="bi bi-clock"></i>Open Hours</h3>
                                    <p>Senin - Minggu<br>9:00 AM - 05:00 PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Maksimal 100 Karakter" maxlength="100"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="{{ asset('frontend/img/icon-footer.png') }}" alt="">
                            <span>Couple Moment </span>
                        </a>
                        <p style="text-align: justify">Buat undangan digitalmu sendiri dan jadikan pernikahan impianmu
                            menjadi nyata! Mulailah
                            perjalanan tak terlupakan menuju hari bahagiamu dengan sentuhan pribadi yang mencerminkan
                            kisah cinta kalian. Inspirasi dan kreasi di ujung jari Anda, karena setiap detail adalah
                            langkah ke arah pernikahan impian yang sejati. Selamat merancang, merayakan, dan menjadikan
                            setiap momen begitu istimewa! 💑✨</p>
                        <div class="social-links mt-3">
                            <a href="https://wa.me/+6281528464820?text=Hi!%20Couple Moment,%20bagaimana%20cara%20memesan%20undangan%20online%20?"
                                class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                            <a href="https://www.instagram.com/couplemoment.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
                                class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="mailto:cs@couplemoment.com" class="email"><i class="bi bi-envelope"></i></a>
                            <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Navigations</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#desain">Preset / Desain</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#harga">Harga</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portofolio">Portofolio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="https://wa.me/+6281528464820?text=Hi!%20Couple Moment,%20apakah%20saya%20bisa%20bisa%20bergabung%20menjadi%20bagian%20dari%20reseller%20?">Menjadi
                                    Reseller</a></li>
                        </ul>

                         {{-- <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Whatsapp</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Instagram</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Email</a></li>
                        </ul> --}}
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Whatsapp</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Instagram</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Email</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Payment Method</h4>
                        <img src="{{ asset('frontend/img/subsection-channel-alt-latest.png') }}" alt=" images"
                            class="img-fluid animated" alt="">

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Preloader Section -->
    <div class="preloader">
        <img src="{{ asset('frontend/img/icon-footer.svg') }}" alt="Couple Moment">
        <p class="couple-moment-text">Couple Moment</p>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script> {{ asset('') }}

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
