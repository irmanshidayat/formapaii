<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Event - APAII</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">


    <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- form baru -->
    <script>
        function showAdditionalFields() {
            var kategori = document.getElementById("kategori").value;
            document.getElementById("jobseeker_fields").style.display = (kategori == 'Jobseeker') ? "block" : "none";
            document.getElementById("bekerja_fields").style.display = (kategori == 'Bekerja') ? "block" : "none";
            document.getElementById("usaha_fields").style.display = (kategori == 'Pelaku usaha bisnis') ? "block" : "none";
            document.getElementById("sekolah_fields").style.display = (kategori == 'Sekolah/universitas') ? "block" : "none";
        }
    </script>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top" style="background: linear-gradient(90deg, rgba(0, 172, 255, 0.9), rgba(100, 208, 255, 0.9), rgba(200, 237, 255, 0.9)); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto" style="color: #fff;">
            <h1 class="sitename" style="font-family: 'Poppins', sans-serif; letter-spacing: 2px;">APAII</h1>
        </a>

        <nav id="navmenu" class="navmenu" style="font-size: 18px;">
            <ul class="d-flex list-unstyled mb-0">
                <li><a href="#hero" class="active" style="color: #fff; padding: 0 20px; transition: color 0.3s ease;">Home</a></li>
                <li><a href="#about" style="color: #fff; padding: 0 20px; transition: color 0.3s ease;">About</a></li>
                <li><a href="#services" style="color: #fff; padding: 0 20px; transition: color 0.3s ease;">Event</a></li>
                <li><a href="#pembicara" style="color: #fff; padding: 0 20px; transition: color 0.3s ease;">Speaker</a></li>
            </ul>
        </nav>

        <a class="btn-getstarted" href="#formpendaftaran" style="background: rgba(0, 123, 255, 0.85); color: #fff; padding: 12px 30px; border-radius: 50px; box-shadow: 0px 5px 10px rgba(0, 123, 255, 0.4); transition: background-color 0.3s ease;">
            DAFTAR
        </a>

        <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color: #fff; font-size: 28px;"></i>

    </div>
</header>



    <main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section" style="background: linear-gradient(135deg, #00c6ff, #0072ff, #00ffb9); padding: 100px 0; position: relative; overflow: hidden;">
    <div class="container">
        <div class="row gy-4">
            <!-- Text Content -->
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h1 style="font-size: 4.2rem; font-weight: bold; color: #ffffff;">Maksimalkan Bisnis Anda dengan AI dan Digital Marketing!</h1>
                <p style="font-size: 1.5rem; color: #d1e7ff; margin-top: 20px;">Bergabunglah dengan <strong style="color: #ffeb3b;">Pelatihan Nasional AI</strong> yang akan mengubah cara Anda memanfaatkan <strong style="color: #ffeb3b;">Artificial Intelligence</strong> dalam pemasaran digital. Tingkatkan engagement dan optimalkan konversi Anda dengan teknologi terkini.</p>
                <p style="font-size: 1.5rem; color: #d1e7ff;">Pelatihan ini dipandu oleh para ahli dengan wawasan praktis tentang tren terbaru AI yang bisa Anda terapkan langsung. Jangan lewatkan kesempatan untuk membawa bisnis Anda ke level berikutnya!</p>
                
                <!-- Call to Action Button -->
                <div class="d-flex mt-4">
                    <a href="#formpendaftaran" class="btn-get-started" style="background: #ff0099; color: #fff; padding: 18px 40px; border-radius: 50px; box-shadow: 0px 10px 20px rgba(255, 0, 153, 0.6); transition: 0.3s ease; text-transform: uppercase; font-weight: bold; font-size: 1.3rem;">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
    <img src="assets/img/ai header.png" class="img-fluid animated rounded" alt="Pelatihan AI Digital Marketing" style="border-radius: 20px; filter: drop-shadow(0 25px 30px rgba(0, 0, 0, 0.6));">
</div>

        </div>
    </div>

    <!-- Decorative Background Elements -->
    <div style="position: absolute; top: -20%; left: -15%; width: 350px; height: 350px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; filter: blur(80px);"></div>
    <div style="position: absolute; bottom: -20%; right: -10%; width: 300px; height: 300px; background: rgba(0, 255, 185, 0.3); border-radius: 50%; filter: blur(80px);"></div>
</section>

<!-- Why Choose Our AI Training Section -->
<section id="featured-services" class="featured-services section" style="background: linear-gradient(135deg, #e1f5fe, #ffebee); padding: 80px 0;">
    
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up" style="padding-bottom: 40px;">
        <h2 style="color: #1565c0; font-weight: bold;">Kenapa Harus Mengikuti Pelatihan di Kami?</h2>
        <p style="color: #424242; font-size: 1.2rem;">Kami menawarkan pelatihan berbasis AI yang dirancang khusus untuk memberikan Anda keunggulan kompetitif di era digital. Dengan pendekatan praktis dan teknologi terkini, kami akan membantu Anda memaksimalkan potensi pemasaran digital Anda.</p>
    </div>

    <div class="container">
        <div class="row gy-4">

            <!-- Service 1: Optimasi AI -->
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(33, 150, 243, 0.2); transition: 0.3s;">
                    <div class="icon" style="font-size: 45px; color: #03a9f4; margin-bottom: 15px;">
                        <i class="bi bi-cpu"></i> <!-- Icon AI CPU -->
                    </div>
                    <h4><a href="#" class="stretched-link" style="text-decoration: none; color: #01579b;">Optimasi AI untuk Digital Marketing</a></h4>
                    <p style="color: #555;">Tingkatkan efisiensi pemasaran dengan kecerdasan buatan. Pelajari cara AI menganalisis data untuk membuat keputusan yang lebih cerdas dan terarah.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Service 2: Automasi Pemasaran -->
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(244, 67, 54, 0.2); transition: 0.3s;">
                    <div class="icon" style="font-size: 45px; color: #e91e63; margin-bottom: 15px;">
                        <i class="bi bi-robot"></i> <!-- Icon Automasi AI -->
                    </div>
                    <h4><a href="#" class="stretched-link" style="text-decoration: none; color: #b71c1c;">Automasi Pemasaran dengan AI</a></h4>
                    <p style="color: #555;">Automatisasikan kampanye pemasaran Anda menggunakan teknologi AI untuk meningkatkan konversi dan efisiensi operasional.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Service 3: Analitik AI -->
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(255, 193, 7, 0.2); transition: 0.3s;">
                    <div class="icon" style="font-size: 45px; color: #ffc107; margin-bottom: 15px;">
                        <i class="bi bi-bar-chart-line"></i> <!-- Icon Analitik AI -->
                    </div>
                    <h4><a href="#" class="stretched-link" style="text-decoration: none; color: #ff6f00;">Analitik dan Prediksi AI</a></h4>
                    <p style="color: #555;">Gunakan analitik berbasis AI untuk memprediksi tren pasar, memahami perilaku konsumen, dan mengoptimalkan strategi pemasaran Anda.</p>
                </div>
            </div><!-- End Service Item -->

        </div>
    </div>
</section><!-- /Featured Services Section -->



<!-- About Section -->
<section id="about" class="about section" style="background: linear-gradient(135deg, #1e88e5, #42a5f5, #7e57c2); padding: 60px 0; color: #fff;">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up" style="background: rgba(255, 255, 255, 0.1); padding: 25px; border-radius: 15px;">
        <h2 style="color: #ffeb3b; font-weight: bold;">Asosiasi Pengguna AI Indonesia</h2>
        <p style="color: #ffcc80; font-size: 1.2rem;">Kami mensosialisasikan dan mempromosikan penggunaan kecerdasan buatan (AI) untuk mempercepat pekerjaan sehari-hari dengan tetap mengutamakan tanggung jawab sosial dan etika.</p>
    </div><!-- End Section Title -->

    <div class="container" style="background: rgba(255, 255, 255, 0.1); padding: 25px; border-radius: 15px;">
        <div class="row gy-4">
            
            <!-- Image Section -->
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/ai body.png" class="img-fluid" alt="About AI Indonesia" style="border-radius: 15px; box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.5);">
            </div>

            <!-- Text Content -->
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3 style="color: #ffd700;">Mengapa Kecerdasan Buatan (AI) Penting untuk Masa Depan?</h3>
                <p class="fst-italic" style="color: #ffcc80; font-size: 1.1rem;">
                    Asosiasi Pengguna AI Indonesia berdedikasi untuk mengedukasi masyarakat tentang manfaat AI dalam meningkatkan produktivitas tanpa melupakan tanggung jawab sosial.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle-fill" style="color: #ffd700;"></i> <span style="color: #ffffff;">Mempercepat pekerjaan sehari-hari dengan teknologi otomatisasi berbasis AI.</span></li>
                    <li><i class="bi bi-check-circle-fill" style="color: #ffd700;"></i> <span style="color: #ffffff;">Menjaga etika dalam penggunaan AI untuk memastikan dampak positif bagi masyarakat luas.</span></li>
                    <li><i class="bi bi-check-circle-fill" style="color: #ffd700;"></i> <span style="color: #ffffff;">Memberikan pelatihan dan pendidikan agar masyarakat lebih paham dan siap mengadopsi AI dalam aktivitas harian.</span></li>
                </ul>
                <p style="color: #ffcc80; font-size: 1.1rem;">
                    AI tidak hanya tentang teknologi, tapi juga tentang menciptakan masa depan yang lebih baik. Kami percaya bahwa dengan adopsi yang bertanggung jawab, AI bisa mempercepat proses kerja dan memberikan dampak positif yang lebih luas.
                </p>
            </div>
        </div>
    </div>

</section><!-- /About Section -->





        <!-- Stats Section -->
<section id="stats" class="stats section" style="background: linear-gradient(135deg, #e0f7fa, #ffebee); padding: 60px 0;">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(0, 188, 212, 0.3); transition: transform 0.3s ease;">
                    <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter" style="color: #00bcd4; font-size: 3rem; font-weight: bold;"></span>
                    <p style="color: #00796b; font-size: 1.2rem; margin-top: 10px;">Peserta Batch 1 & 2</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(244, 67, 54, 0.3); transition: transform 0.3s ease;">
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter" style="color: #f44336; font-size: 3rem; font-weight: bold;"></span>
                    <p style="color: #d32f2f; font-size: 1.2rem; margin-top: 10px;">Sesi Pelatihan</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(255, 193, 7, 0.3); transition: transform 0.3s ease;">
                    <span data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="1" class="purecounter" style="color: #ffc107; font-size: 3rem; font-weight: bold;"></span>
                    <p style="color: #ff8f00; font-size: 1.2rem; margin-top: 10px;">Persentase Kepuasan</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 text-center">
                <p style="font-size: 1.4rem; color: #333;">Sudah lebih dari <strong style="color: #f44336;">3.000 peserta</strong> telah mengikuti pelatihan di Batch 1 & 2! Jangan lewatkan kesempatan Anda untuk bergabung dan meningkatkan skill di bidang AI dan Digital Marketing.</p>
                <a href="#formpendaftaran" class="btn-get-started" style="background: #00bcd4; color: #fff; padding: 12px 30px; border-radius: 50px; box-shadow: 0px 8px 12px rgba(0, 188, 212, 0.4); transition: 0.3s;">DAFTAR SEKARANG</a>
            </div>
        </div>

    </div>

</section><!-- /Stats Section -->


        <!-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(76, 175, 80, 0.3); transition: transform 0.3s ease;">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter" style="color: #4caf50; font-size: 3rem; font-weight: bold;"></span>
                <p style="color: #388e3c; font-size: 1.2rem; margin-top: 10px;">Workers</p>
            </div>
        </div>End Stats Item -->

    </div>

</div>

</section><!-- /Stats Section -->


<!-- Services Section -->
<section id="services" class="services section" style="background: linear-gradient(135deg, #e3f2fd, #ffebee); padding: 60px 0;">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up" style="background: rgba(255, 255, 255, 0.5); padding: 20px; border-radius: 10px;">
        <h2 style="color: #1565c0;">Pelatihan Nasional AI Dalam Digital Marketing - Batch III</h2>
        <p style="color: #424242;">22 - 24 Oktober 2024 | Jam: 09.00 - 12.00 WIB | Via Zoom</p>
        <p style="color: #616161;">Diselenggarakan oleh Asosiasi Pengguna AI Indonesia</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <!-- Workshop Content: AI Strategy -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(33, 150, 243, 0.3); transition: transform 0.3s ease;">
                    <div class="icon" style="color: #2196f3;">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h3 style="color: #1e88e5;">Penerapan AI dalam Strategi Digital Marketing</h3>
                    <p style="color: #424242;">Pelajari bagaimana AI dapat membantu mempercepat pengambilan keputusan dan mengoptimalkan strategi pemasaran digital.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Workshop Content: Landing Page Creation -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(255, 87, 34, 0.3); transition: transform 0.3s ease;">
                    <div class="icon" style="color: #ff5722;">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h3 style="color: #e64a19;">Pembuatan Landing Page dengan Canva, SEO & SEM</h3>
                    <p style="color: #424242;">Pelajari teknik SEO, SEM, dan penggunaan Canva untuk membuat landing page yang menarik dan efektif untuk kampanye digital.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Workshop Content: Social Media Ads -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(76, 175, 80, 0.3); transition: transform 0.3s ease;">
                    <div class="icon" style="color: #4caf50;">
                        <i class="bi bi-bullhorn"></i>
                    </div>
                    <h3 style="color: #388e3c;">Pemasaran di Media Sosial dengan Instagram Ads</h3>
                    <p style="color: #424242;">Pelajari cara memanfaatkan Instagram Ads untuk meningkatkan engagement dan konversi di media sosial.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Workshop Content: AI Application -->
            <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(156, 39, 176, 0.3); transition: transform 0.3s ease;">
                    <div class="icon" style="color: #9c27b0;">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h3 style="color: #8e24aa;">Penerapan AI untuk Pengoptimalan Bisnis</h3>
                    <p style="color: #424242;">Bagaimana AI dapat digunakan untuk mengoptimalkan berbagai proses bisnis, mulai dari pengambilan keputusan hingga analitik data.</p>
                </div> -->
            </div><!-- End Service Item -->

        </div>

        <!-- Call to Action -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 text-center">
                <p style="font-size: 1.4rem; color: #333;">Jangan lewatkan kesempatan untuk belajar dari para ahli AI dan Digital Marketing dalam pelatihan ini! Batch 3 akan segera dimulai. Segera daftar dan raih keunggulan kompetitif Anda di era digital.</p>
                <a href="#formpendaftaran" class="btn-get-started" style="background: #2196f3; color: #fff; padding: 12px 30px; border-radius: 50px; box-shadow: 0px 8px 12px rgba(33, 150, 243, 0.4); transition: 0.3s;">DAFTAR SEKARANG</a>
            </div>
        </div>

    </div>

</section><!-- /Services Section -->


        <!-- Portfolio Section -->
       <!-- /Portfolio Section -->

       <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section" style="background: linear-gradient(135deg, #e0f7fa, #ffe0b2); padding: 60px 0;">

<!-- Section Title -->
<div class="container section-title text-center" data-aos="fade-up" style="padding: 20px; border-radius: 10px;">
    <h2 style="color: #ff7043;">Apa Kata Mereka?</h2>
    <p style="color: #616161;">Dengar dari mereka yang sudah mengikuti Pelatihan Nasional AI dalam Digital Marketing Batch sebelumnya</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
        <script type="application/json" class="swiper-config">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            },
            "breakpoints": {
                "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                },
                "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 20
                }
            }
        }
        </script>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-item" style="background: #fff3e0; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(255, 112, 67, 0.3);">
                    <p>
                        <i class="bi bi-quote quote-icon-left" style="color: #ff7043;"></i>
                        <span style="color: #616161;">"Pelatihan ini luar biasa! Saya belajar cara menggunakan AI dalam strategi pemasaran digital dan hasilnya langsung terasa pada bisnis saya."</span>
                        <i class="bi bi-quote quote-icon-right" style="color: #ff7043;"></i>
                    </p>
                    <div class="testimonial-img" style="font-size: 40px; color: #ff7043;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h3 style="color: #ff5722;">Andi Saputra</h3>
                    <h4 style="color: #ff7043;">Pemilik Bisnis Kecil</h4>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-item" style="background: #e1f5fe; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(33, 150, 243, 0.3);">
                    <p>
                        <i class="bi bi-quote quote-icon-left" style="color: #2196f3;"></i>
                        <span style="color: #616161;">"Saya sangat terkesan dengan pelatihan ini. Penggunaan Instagram Ads dan AI sangat membantu saya meningkatkan engagement dan konversi bisnis online saya."</span>
                        <i class="bi bi-quote quote-icon-right" style="color: #2196f3;"></i>
                    </p>
                    <div class="testimonial-img" style="font-size: 40px; color: #2196f3;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h3 style="color: #1e88e5;">Dewi Lestari</h3>
                    <h4 style="color: #2196f3;">Pengusaha Online</h4>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-item" style="background: #f1f8e9; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(76, 175, 80, 0.3);">
                    <p>
                        <i class="bi bi-quote quote-icon-left" style="color: #4caf50;"></i>
                        <span style="color: #616161;">"Materi pelatihan yang disampaikan sangat relevan dengan perkembangan AI di dunia digital marketing. Banyak ilmu baru yang bisa langsung diterapkan."</span>
                        <i class="bi bi-quote quote-icon-right" style="color: #4caf50;"></i>
                    </p>
                    <div class="testimonial-img" style="font-size: 40px; color: #4caf50;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h3 style="color: #388e3c;">Budi Santoso</h3>
                    <h4 style="color: #4caf50;">Marketer Profesional</h4>
                </div>
            </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
    </div>

</div>

</section><!-- /Testimonials Section -->


        <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section" style="background: linear-gradient(135deg, #f48fb1, #7986cb); padding: 60px 0;">

<div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
            <div class="text-center" style="color: #ffffff;">
                <h3 style="font-size: 2.5rem; font-weight: bold; color: #ffeb3b;">Siap Memaksimalkan Bisnis Anda dengan AI?</h3>
                <p style="font-size: 1.4rem; margin-top: 20px; color: #ffffff;">Jangan lewatkan kesempatan emas untuk bergabung dengan Pelatihan Nasional AI dalam Digital Marketing - Batch III. Dapatkan wawasan mendalam tentang cara menggunakan Artificial Intelligence untuk meningkatkan pemasaran digital Anda. Raih keunggulan kompetitif dan optimalkan konversi bisnis Anda sekarang!</p>
                <a class="cta-btn" href="#formpendaftaran" style="background-color: #ffeb3b; color: #000; padding: 15px 40px; border-radius: 50px; font-size: 1.2rem; font-weight: bold; box-shadow: 0px 10px 20px rgba(255, 235, 59, 0.3); transition: background-color 0.3s ease;">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</div>

</section><!-- /Call To Action Section -->

<!-- Team Section -->
<section id="pembicara" class="team section" style="background: linear-gradient(135deg, #e1f5fe, #ffebee); padding: 60px 0;">

    <!-- Section Title -->
    <div class="container section-title text-center" id="pembicara" data-aos="fade-up" style="padding: 20px; border-radius: 10px;">
        <h2 style="color: #1565c0;">Pembicara Kompeten</h2>
        <p style="color: #424242;">Temui para ahli yang akan membimbing Anda selama Pelatihan Nasional AI dalam Digital Marketing - Batch III. Para pembicara kami memiliki pengalaman luas dan keahlian di bidangnya.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            <!-- Speaker 1: Ministry Representative -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(33, 150, 243, 0.3); transition: transform 0.3s ease;">
                    <div class="pic" style="font-size: 60px; text-align: center; color: #2196f3;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="member-info">
                        <h4 style="color: #1565c0;">Dirjen Kementerian</h4>
                        <span style="color: #1e88e5;">Perwakilan Kementerian Komunikasi dan Informatika</span>
                        <p style="color: #616161; margin-top: 10px;">Seorang yang memiliki pengalaman lebih dari 15 tahun dalam pengembangan kebijakan digital dan transformasi teknologi, terutama di sektor AI dan digital marketing.</p>
                        <div class="social mt-3">
                            <a href="#" style="color: #1565c0;"><i class="bi bi-twitter"></i></a>
                            <a href="#" style="color: #1565c0;"><i class="bi bi-facebook"></i></a>
                            <a href="#" style="color: #1565c0;"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <!-- Speaker 2: Asosiasi Pengguna AI Indonesia -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(255, 87, 34, 0.3); transition: transform 0.3s ease;">
                    <div class="pic" style="font-size: 60px; text-align: center; color: #ff5722;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="member-info">
                        <h4 style="color: #e64a19;">Dian Martin</h4>
                        <span style="color: #f4511e;">Ketua Asosiasi Pengguna AI Indonesia</span>
                        <p style="color: #616161; margin-top: 10px;">Dian Martin adalah pemimpin Asosiasi Pengguna AI Indonesia, dengan visi untuk mendorong adopsi teknologi AI di berbagai industri. Dian juga seorang praktisi dalam penerapan AI di bidang pemasaran digital.</p>
                        <div class="social mt-3">
                            <a href="#" style="color: #e64a19;"><i class="bi bi-twitter"></i></a>
                            <a href="#" style="color: #e64a19;"><i class="bi bi-facebook"></i></a>
                            <a href="#" style="color: #e64a19;"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <!-- Speaker 3: Expert & Speaker -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member" style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0px 10px 25px rgba(76, 175, 80, 0.3); transition: transform 0.3s ease;">
                    <div class="pic" style="font-size: 60px; text-align: center; color: #4caf50;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="member-info">
                        <h4 style="color: #388e3c;">Rifat</h4>
                        <span style="color: #43a047;">Narasumber & Praktisi Pemasaran Digital</span>
                        <p style="color: #616161; margin-top: 10px;">Rifat Pratama adalah seorang praktisi digital marketing dengan spesialisasi dalam AI-driven marketing dan membantu bisnis dalam meningkatkan konversi menggunakan teknologi AI.</p>
                        <div class="social mt-3">
                            <a href="#" style="color: #43a047;"><i class="bi bi-twitter"></i></a>
                            <a href="#" style="color: #43a047;"><i class="bi bi-facebook"></i></a>
                            <a href="#" style="color: #43a047;"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

</section><!-- /Team Section -->



        <!-- Contact Section -->
        <section id="formpendaftaran" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">

                <!-- 50%  -->
                <!-- <div class="w-50 mx-auto"> Added to restrict width to 50% and center the field -->
                    <!-- form pendaftaran -->
                    <div class="container mt-5">
                    <h2 class="mb-4 text-center" style="font-size: 2.5rem; font-weight: bold; color: #1565c0; text-transform: uppercase; letter-spacing: 2px;">
    Bergabunglah Sekarang di Pelatihan Nasional AI Dalam Digital Marketing!
</h2>
<p class="text-center" style="font-size: 1.2rem; color: #616161; margin-bottom: 30px;">
    Tingkatkan keahlian digital marketing Anda dengan teknologi AI terbaru! Isi formulir di bawah untuk mendaftar dan raih keunggulan kompetitif di era digital.
</p>

                        <div class="row justify-content-center"> <!-- New: Centers the form -->
                            <!-- <div class="col-md-6"> New: Limits the width to 50% -->
                            <form action="<?php echo $action; ?>" method="post">
                                <!-- Nama Lengkap -->
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?php echo $nama_lengkap; ?>" required>
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>

                                <!-- Nomor WA -->
                                <div class="mb-3">
                                    <label for="nomor_wa" class="form-label">Nomor WA:</label>
                                    <input type="number" id="nomor_wa" name="nomor_wa" class="form-control" value="<?php echo $nomor_wa; ?>" required>
                                    <?php echo form_error('nomor_wa') ?>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                                    <?php echo form_error('email') ?>
                                </div>

                                <!-- Usia -->
                                <div class="mb-3">
                                    <label for="usia" class="form-label">Usia:</label>
                                    <input type="date" id="usia" name="usia" class="form-control" value="<?php echo $usia; ?>" required>
                                    <?php echo form_error('usia') ?>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" class="form-check-input" <?php echo ($jenis_kelamin == 'Laki-Laki') ? 'checked' : ''; ?> required>
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="form-check-input" <?php echo ($jenis_kelamin == 'Perempuan') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                    <?php echo form_error('jenis_kelamin') ?>
                                </div>

                                <!-- Info Pelatihan -->
                                <div class="mb-3">
                                    <label for="info_pelatihan" class="form-label">Tau dari mana info pelatihan ini:</label>
                                    <select class="form-select" id="info_pelatihan" name="info_pelatihan" required>
                                        <option value="" disabled selected>Pilih Sumber Informasi</option>
                                        <option value="Sosial Media" <?php echo ($info_pelatihan == 'Sosial Media') ? 'selected' : ''; ?>>Sosial Media</option>
                                        <option value="Website" <?php echo ($info_pelatihan == 'Website') ? 'selected' : ''; ?>>Website</option>
                                        <option value="WhatsApp" <?php echo ($info_pelatihan == 'WhatsApp') ? 'selected' : ''; ?>>WhatsApp</option>
                                        <option value="Email" <?php echo ($info_pelatihan == 'Email') ? 'selected' : ''; ?>>Email</option>
                                        <option value="Job Portal" <?php echo ($info_pelatihan == 'Job Portal') ? 'selected' : ''; ?>>Job Portal</option>
                                        <option value="Teman/sodara" <?php echo ($info_pelatihan == 'Teman/sodara') ? 'selected' : ''; ?>>Teman/sodara</option>
                                        <option value="Radio Publica FM" <?php echo ($info_pelatihan == 'Radio Publica FM') ? 'selected' : ''; ?>>Radio Publica FM</option>
                                        <option value="Loket.com" <?php echo ($info_pelatihan == 'Loket.com') ? 'selected' : ''; ?>>Loket.com</option>
                                        <option value="Rumah BUMN Bandung" <?php echo ($info_pelatihan == 'Rumah BUMN Bandung') ? 'selected' : ''; ?>>Rumah BUMN Bandung</option>
                                        <option value="KPMI Bogor" <?php echo ($info_pelatihan == 'KPMI Bogor') ? 'selected' : ''; ?>>KPMI Bogor</option>
                                        <option value="Dapanel (Digital Kreatif)" <?php echo ($info_pelatihan == 'Dapanel (Digital Kreatif)') ? 'selected' : ''; ?>>Dapanel (Digital Kreatif)</option>
                                        <option value="Telegram" <?php echo ($info_pelatihan == 'Telegram') ? 'selected' : ''; ?>>Telegram</option>
                                        <option value="Seller Tangerang" <?php echo ($info_pelatihan == 'Seller Tangerang') ? 'selected' : ''; ?>>Seller Tangerang</option>
                                        <option value="Enterpreneur.Id" <?php echo ($info_pelatihan == 'Enterpreneur.Id') ? 'selected' : ''; ?>>Enterpreneur.Id</option>
                                        <option value="Yang lain" id="option_lain" <?php echo ($info_pelatihan == 'Yang lain') ? 'selected' : ''; ?>>Yang lain</option>
                                    </select>

                                    <!-- Input field untuk "Yang lain" -->
                                    <div class="form-group mt-2" id="input_lain_wilayah" style="display: none;">
                                        <label for="info_lain">Silakan sebutkan:</label>
                                        <input type="text" class="form-control" id="info_lain" name="info_lain" placeholder="Tulis sumber info lainnya di sini" value="<?php echo isset($info_lain) ? $info_lain : ''; ?>">
                                    </div>
                                </div>

                                <script>
                                    // Tampilkan input text saat "Yang lain" dipilih di dropdown
                                    document.getElementById('info_pelatihan').addEventListener('change', function() {
                                        if (this.value === 'Yang lain') {
                                            document.getElementById('input_lain_wilayah').style.display = 'block';
                                        } else {
                                            document.getElementById('input_lain_wilayah').style.display = 'none';
                                        }
                                    });

                                    // Tampilkan input jika "Yang lain" sudah terpilih ketika halaman di-load
                                    if (document.getElementById('option_lain').selected) {
                                        document.getElementById('input_lain').style.display = 'block';
                                    }
                                </script>

                                <?php echo form_error('info_pelatihan') ?>
                        </div>


                        <!-- Daerah Domisili -->
                        <div class="mb-3">
                            <label for="daerah_domisili" class="form-label">Daerah Domisili:</label>
                            <!-- <div class="w-50 mx-auto"> Added to restrict width to 50% and center the field -->
                            <select id="daerah_domisili" name="daerah_domisili" class="form-select" required>
                                <option value="" disabled selected>Pilih Provinsi</option>
                                <option value="Aceh" <?php echo ($daerah_domisili == 'Aceh') ? 'selected' : ''; ?>>Aceh</option>
                                <option value="Bali" <?php echo ($daerah_domisili == 'Bali') ? 'selected' : ''; ?>>Bali</option>
                                <option value="Banten" <?php echo ($daerah_domisili == 'Banten') ? 'selected' : ''; ?>>Banten</option>
                                <option value="Bengkulu" <?php echo ($daerah_domisili == 'Bengkulu') ? 'selected' : ''; ?>>Bengkulu</option>
                                <option value="DI Yogyakarta" <?php echo ($daerah_domisili == 'DI Yogyakarta') ? 'selected' : ''; ?>>DI Yogyakarta</option>
                                <option value="DKI Jakarta" <?php echo ($daerah_domisili == 'DKI Jakarta') ? 'selected' : ''; ?>>DKI Jakarta</option>
                                <option value="Gorontalo" <?php echo ($daerah_domisili == 'Gorontalo') ? 'selected' : ''; ?>>Gorontalo</option>
                                <option value="Jambi" <?php echo ($daerah_domisili == 'Jambi') ? 'selected' : ''; ?>>Jambi</option>
                                <option value="Jawa Barat" <?php echo ($daerah_domisili == 'Jawa Barat') ? 'selected' : ''; ?>>Jawa Barat</option>
                                <option value="Jawa Tengah" <?php echo ($daerah_domisili == 'Jawa Tengah') ? 'selected' : ''; ?>>Jawa Tengah</option>
                                <option value="Jawa Timur" <?php echo ($daerah_domisili == 'Jawa Timur') ? 'selected' : ''; ?>>Jawa Timur</option>
                                <option value="Kalimantan Barat" <?php echo ($daerah_domisili == 'Kalimantan Barat') ? 'selected' : ''; ?>>Kalimantan Barat</option>
                                <option value="Kalimantan Selatan" <?php echo ($daerah_domisili == 'Kalimantan Selatan') ? 'selected' : ''; ?>>Kalimantan Selatan</option>
                                <option value="Kalimantan Tengah" <?php echo ($daerah_domisili == 'Kalimantan Tengah') ? 'selected' : ''; ?>>Kalimantan Tengah</option>
                                <option value="Kalimantan Timur" <?php echo ($daerah_domisili == 'Kalimantan Timur') ? 'selected' : ''; ?>>Kalimantan Timur</option>
                                <option value="Kalimantan Utara" <?php echo ($daerah_domisili == 'Kalimantan Utara') ? 'selected' : ''; ?>>Kalimantan Utara</option>
                                <option value="Kepulauan Bangka Belitung" <?php echo ($daerah_domisili == 'Kepulauan Bangka Belitung') ? 'selected' : ''; ?>>Kepulauan Bangka Belitung</option>
                                <option value="Kepulauan Riau" <?php echo ($daerah_domisili == 'Kepulauan Riau') ? 'selected' : ''; ?>>Kepulauan Riau</option>
                                <option value="Lampung" <?php echo ($daerah_domisili == 'Lampung') ? 'selected' : ''; ?>>Lampung</option>
                                <option value="Maluku" <?php echo ($daerah_domisili == 'Maluku') ? 'selected' : ''; ?>>Maluku</option>
                                <option value="Maluku Utara" <?php echo ($daerah_domisili == 'Maluku Utara') ? 'selected' : ''; ?>>Maluku Utara</option>
                                <option value="Nusa Tenggara Barat" <?php echo ($daerah_domisili == 'Nusa Tenggara Barat') ? 'selected' : ''; ?>>Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur" <?php echo ($daerah_domisili == 'Nusa Tenggara Timur') ? 'selected' : ''; ?>>Nusa Tenggara Timur</option>
                                <option value="Papua" <?php echo ($daerah_domisili == 'Papua') ? 'selected' : ''; ?>>Papua</option>
                                <option value="Papua Barat" <?php echo ($daerah_domisili == 'Papua Barat') ? 'selected' : ''; ?>>Papua Barat</option>
                                <option value="Papua Selatan" <?php echo ($daerah_domisili == 'Papua Selatan') ? 'selected' : ''; ?>>Papua Selatan</option>
                                <option value="Papua Tengah" <?php echo ($daerah_domisili == 'Papua Tengah') ? 'selected' : ''; ?>>Papua Tengah</option>
                                <option value="Papua Pegunungan" <?php echo ($daerah_domisili == 'Papua Pegunungan') ? 'selected' : ''; ?>>Papua Pegunungan</option>
                                <option value="Riau" <?php echo ($daerah_domisili == 'Riau') ? 'selected' : ''; ?>>Riau</option>
                                <option value="Sulawesi Barat" <?php echo ($daerah_domisili == 'Sulawesi Barat') ? 'selected' : ''; ?>>Sulawesi Barat</option>
                                <option value="Sulawesi Selatan" <?php echo ($daerah_domisili == 'Sulawesi Selatan') ? 'selected' : ''; ?>>Sulawesi Selatan</option>
                                <option value="Sulawesi Tengah" <?php echo ($daerah_domisili == 'Sulawesi Tengah') ? 'selected' : ''; ?>>Sulawesi Tengah</option>
                                <option value="Sulawesi Tenggara" <?php echo ($daerah_domisili == 'Sulawesi Tenggara') ? 'selected' : ''; ?>>Sulawesi Tenggara</option>
                                <option value="Sulawesi Utara" <?php echo ($daerah_domisili == 'Sulawesi Utara') ? 'selected' : ''; ?>>Sulawesi Utara</option>
                                <option value="Sumatera Barat" <?php echo ($daerah_domisili == 'Sumatera Barat') ? 'selected' : ''; ?>>Sumatera Barat</option>
                                <option value="Sumatera Selatan" <?php echo ($daerah_domisili == 'Sumatera Selatan') ? 'selected' : ''; ?>>Sumatera Selatan</option>
                                <option value="Sumatera Utara" <?php echo ($daerah_domisili == 'Sumatera Utara') ? 'selected' : ''; ?>>Sumatera Utara</option>
                            </select>
                            <?php echo form_error('daerah_domisili') ?>
                        </div>


                        <!-- Tujuan Pelatihan -->
                        <div class="mb-3">
                            <label class="form-label">Tujuan mengikuti pelatihan:</label>
                            <!-- <div class="w-50 mx-auto"> Added to restrict width to 50% and center the field -->
                            <select id="tujuan_pelatihan" name="tujuan_pelatihan" class="form-select" required onchange="toggleInputLain()">
                                <option value="" disabled selected>Pilih Tujuan</option>
                                <option value="Mendapatkan Pekerjaan" <?php echo ($tujuan_pelatihan == 'Mendapatkan Pekerjaan') ? 'selected' : ''; ?>>Mendapatkan Pekerjaan</option>
                                <option value="Menambah Penghasilan" <?php echo ($tujuan_pelatihan == 'Menambah Penghasilan') ? 'selected' : ''; ?>>Menambah Penghasilan</option>
                                <option value="Mengembangkan Bisnis" <?php echo ($tujuan_pelatihan == 'Mengembangkan Bisnis') ? 'selected' : ''; ?>>Mengembangkan Bisnis</option>
                                <option value="Meningkatkan Penjualan" <?php echo ($tujuan_pelatihan == 'Meningkatkan Penjualan') ? 'selected' : ''; ?>>Meningkatkan Penjualan</option>
                                <option value="Meningkatkan Skill" <?php echo ($tujuan_pelatihan == 'Meningkatkan Skill') ? 'selected' : ''; ?>>Meningkatkan Skill</option>
                                <option value="Mendapatkan sertifikat" <?php echo ($tujuan_pelatihan == 'Mendapatkan sertifikat') ? 'selected' : ''; ?>>Mendapatkan sertifikat</option>
                                <option value="Yang lain" id="option_lain" <?php echo ($tujuan_pelatihan == 'Yang lain') ? 'selected' : ''; ?>>Yang lain</option>
                            </select>

                            <!-- Input field untuk "Yang lain" -->
                            <div class="form-group mt-2" id="input_lain" style="display: none;">
                                <label for="tujuan_lain">Silakan sebutkan:</label>
                                <input type="text" class="form-control" id="tujuan_lain" name="tujuan_lain" placeholder="Tulis tujuan lainnya di sini" value="<?php echo isset($tujuan_lain) ? $tujuan_lain : ''; ?>">
                            </div>

                            <?php echo form_error('tujuan_pelatihan') ?>
                        </div>

                        <script>
                            function toggleInputLain() {
                                var dropdown = document.getElementById('tujuan_pelatihan');
                                var inputLain = document.getElementById('input_lain');
                                if (dropdown.value === 'Yang lain') {
                                    inputLain.style.display = 'block';
                                } else {
                                    inputLain.style.display = 'none';
                                }
                            }

                            // Tampilkan input jika "Yang lain" sudah terpilih ketika halaman di-load
                            document.addEventListener('DOMContentLoaded', function() {
                                if (document.getElementById('option_lain').selected) {
                                    document.getElementById('input_lain').style.display = 'block';
                                }
                            });
                        </script>


                        <!-- Kategori -->
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kamu Termasuk Kategori:</label>
                            <!-- <div class="w-50 mx-auto"> Added to restrict width to 50% and center the field -->
                            <select id="kategori" name="kategori" class="form-select" onchange="showAdditionalFields()" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Jobseeker" <?php echo ($kategori == 'Jobseeker') ? 'selected' : ''; ?>>Jobseeker</option>
                                <option value="Bekerja" <?php echo ($kategori == 'Bekerja') ? 'selected' : ''; ?>>Bekerja</option>
                                <option value="Pelaku usaha bisnis" <?php echo ($kategori == 'Pelaku usaha bisnis') ? 'selected' : ''; ?>>Pelaku usaha bisnis</option>
                                <option value="Freelancer/jasa lepasan" <?php echo ($kategori == 'Freelancer/jasa lepasan') ? 'selected' : ''; ?>>Freelancer/jasa lepasan</option>
                                <option value="Sekolah/universitas" <?php echo ($kategori == 'Sekolah/universitas') ? 'selected' : ''; ?>>Sekolah/universitas</option>
                                <option value="Ibu Rumah tangga" <?php echo ($kategori == 'Ibu Rumah tangga') ? 'selected' : ''; ?>>Ibu Rumah tangga</option>
                            </select>
                            <?php echo form_error('kategori') ?>
                        </div>

                        <!-- Fields tambahan sesuai kategori -->
                        <div id="jobseeker_fields" class="mb-3" style="display:none;">
                            <label for="platform_jobseeker" class="form-label">Platform Jobseeker:</label>
                            <select id="platform_jobseeker" name="platform_jobseeker" class="form-select" onchange="toggleJobseekerInputLain()">
                                <option value="Glints" <?php echo ($platform_jobseeker == 'Glints') ? 'selected' : ''; ?>>Glints</option>
                                <option value="Job Street" <?php echo ($platform_jobseeker == 'Job Street') ? 'selected' : ''; ?>>Job Street</option>
                                <option value="Job Street Express" <?php echo ($platform_jobseeker == 'Job Street Express') ? 'selected' : ''; ?>>Job Street Express</option>
                                <option value="Yang lain" <?php echo ($platform_jobseeker == 'Yang lain') ? 'selected' : ''; ?>>Yang lain</option>
                            </select>
                            <div class="form-group mt-2" id="jobseeker_input_lain" style="display: none;">
                                <label for="jobseeker_lain">Silakan sebutkan:</label>
                                <input type="text" class="form-control" id="jobseeker_lain" name="jobseeker_lain" placeholder="Tulis platform lainnya di sini" value="<?php echo isset($jobseeker_lain) ? $jobseeker_lain : ''; ?>">
                            </div>
                        </div>

                        <div id="bekerja_fields" class="mb-3" style="display:none;">
                            <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan:</label>
                            <select id="jenis_pekerjaan" name="jenis_pekerjaan" class="form-select" onchange="toggleBekerjaInputLain()">
                                <option value="Administrasi" <?php echo ($jenis_pekerjaan == 'Administrasi') ? 'selected' : ''; ?>>Administrasi</option>
                                <option value="Manajemen" <?php echo ($jenis_pekerjaan == 'Manajemen') ? 'selected' : ''; ?>>Manajemen</option>
                                <option value="HRD" <?php echo ($jenis_pekerjaan == 'HRD') ? 'selected' : ''; ?>>HRD</option>
                                <option value="Yang lain" <?php echo ($jenis_pekerjaan == 'Yang lain') ? 'selected' : ''; ?>>Yang lain</option>
                            </select>
                            <div class="form-group mt-2" id="bekerja_input_lain" style="display: none;">
                                <label for="bekerja_lain">Silakan sebutkan:</label>
                                <input type="text" class="form-control" id="bekerja_lain" name="bekerja_lain" placeholder="Tulis jenis pekerjaan lainnya di sini" value="<?php echo isset($bekerja_lain) ? $bekerja_lain : ''; ?>">
                            </div>
                        </div>

                        <div id="usaha_fields" class="mb-3" style="display:none;">
                            <label for="jenis_usaha_bisnis" class="form-label">Jenis Usaha / Bisnis:</label>
                            <select id="jenis_usaha_bisnis" name="jenis_usaha_bisnis" class="form-select">
                                <option value="UMKM" <?php echo ($jenis_usaha_bisnis == 'UMKM') ? 'selected' : ''; ?>>UMKM</option>
                                <option value="UKM" <?php echo ($jenis_usaha_bisnis == 'UKM') ? 'selected' : ''; ?>>UKM</option>
                                <option value="Bisnis Lainnya" <?php echo ($jenis_usaha_bisnis == 'Bisnis Lainnya') ? 'selected' : ''; ?>>Bisnis Lainnya</option>
                            </select>
                        </div>

                        <div id="sekolah_fields" class="mb-3" style="display:none;">
                            <label for="sekolah_universitas" class="form-label">Sekolah/Universitas:</label>
                            <select id="sekolah_universitas" name="sekolah_universitas" class="form-select" onchange="toggleSekolahInputLain()">
                                <option value="SMP" <?php echo ($sekolah_universitas == 'SMP') ? 'selected' : ''; ?>>SMP</option>
                                <option value="SMA/SMK" <?php echo ($sekolah_universitas == 'SMA/SMK') ? 'selected' : ''; ?>>SMA/SMK</option>
                                <option value="S1" <?php echo ($sekolah_universitas == 'S1') ? 'selected' : ''; ?>>S1</option>
                                <option value="S2" <?php echo ($sekolah_universitas == 'S2') ? 'selected' : ''; ?>>S2</option>
                                <option value="Lainnya" <?php echo ($sekolah_universitas == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                            </select>
                            <div class="form-group mt-2" id="sekolah_input_lain" style="display: none;">
                                <label for="sekolah_lain">Silakan sebutkan:</label>
                                <input type="text" class="form-control" id="sekolah_lain" name="sekolah_lain" placeholder="Tulis sekolah/universitas lainnya di sini" value="<?php echo isset($sekolah_lain) ? $sekolah_lain : ''; ?>">
                            </div>
                        </div>

                        <script>
                            function showAdditionalFields() {
                                var kategori = document.getElementById('kategori').value;

                                // Hide all additional fields initially
                                document.getElementById('jobseeker_fields').style.display = 'none';
                                document.getElementById('bekerja_fields').style.display = 'none';
                                document.getElementById('usaha_fields').style.display = 'none';
                                document.getElementById('sekolah_fields').style.display = 'none';

                                // Show fields based on selected category
                                if (kategori === 'Jobseeker') {
                                    document.getElementById('jobseeker_fields').style.display = 'block';
                                } else if (kategori === 'Bekerja') {
                                    document.getElementById('bekerja_fields').style.display = 'block';
                                } else if (kategori === 'Pelaku usaha bisnis') {
                                    document.getElementById('usaha_fields').style.display = 'block';
                                } else if (kategori === 'Sekolah/universitas') {
                                    document.getElementById('sekolah_fields').style.display = 'block';
                                }
                            }

                            function toggleJobseekerInputLain() {
                                var platform = document.getElementById('platform_jobseeker').value;
                                var inputLain = document.getElementById('jobseeker_input_lain');
                                inputLain.style.display = (platform === 'Yang lain') ? 'block' : 'none';
                            }

                            function toggleBekerjaInputLain() {
                                var jenis = document.getElementById('jenis_pekerjaan').value;
                                var inputLain = document.getElementById('bekerja_input_lain');
                                inputLain.style.display = (jenis === 'Yang lain') ? 'block' : 'none';
                            }

                            function toggleSekolahInputLain() {
                                var sekolah = document.getElementById('sekolah_universitas').value;
                                var inputLain = document.getElementById('sekolah_input_lain');
                                inputLain.style.display = (sekolah === 'Lainnya') ? 'block' : 'none';
                            }

                            // Call the function to set initial state on page load
                            document.addEventListener('DOMContentLoaded', function() {
                                showAdditionalFields();
                            });
                        </script>


                        <!-- <div class="container mt-5"> -->
                        <!-- <h2 class="mb-4 text-center">Form Pendaftaran Pelatihan</h2> -->
                        <form action="<?php echo $action; ?>" method="post">
                            <!-- Other form fields -->

                            <!-- Kategori Pelatihan -->
                            <div class="mb-3">
                                <label for="kategori_pelatihan" class="form-label">Kategori Pelatihan:</label>
                                <!-- <div class="w-50 mx-auto"> Added to restrict width to 50% and center the field -->
                                <select id="kategori_pelatihan" name="kategori_pelatihan" class="form-select" required onchange="toggleSosmedSection()">
                                    <option value="Berbayar Rp 999.000" <?php echo ($kategori_pelatihan == 'Berbayar Rp 999.000') ? 'selected' : ''; ?>>Berbayar Rp 999.000</option>
                                    <option value="Gratis" <?php echo ($kategori_pelatihan == 'Gratis') ? 'selected' : ''; ?>>Gratis</option>
                                </select>
                                <?php echo form_error('kategori_pelatihan') ?>
                            </div>

                            <div id="sosmed_section" style="display: none; background: linear-gradient(135deg, #1f3c88, #00a8ff); padding: 20px; border-radius: 10px; color: #ffffff;">
                                <!-- Instructions for sharing -->
                                <div class="mb-3 text-center">
                                    <p class="text-light font-weight-bold">Pelatihan gratis dengan men-share Event ini di:</p>
                                    <!-- <ul style="list-style: none; padding-left: 0;"> -->
                                    <li style="display: inline; margin-right: 10px;">📘 Facebook</li>
                                    <li style="display: inline; margin-right: 10px;">📷 Instagram</li>
                                    <li style="display: inline; margin-right: 10px;">📱 WhatsApp</li>
                                    <li style="display: inline; margin-right: 10px;">🐦 X/Twitter</li>
                                    <li style="display: inline; margin-right: 10px;">💼 LinkedIn</li>
                                    <!-- </ul> -->
                                    <p class="text-warning font-weight-bold mt-4">👇🏻Template untuk Share Pelatihan AI Dalam Digital Marketing Batch III👇🏻</p>
                                    <p class="text-warning font-weight-bold">🚀 Pelatihan Nasional AI dalam Digital Marketing oleh APAII! 🌟</p>

                                    <p class="text-light">Halo Sobat APAII!!</p>
                                    <p class="text-light">
                                        Setelah Asosiasi Pengguna Artificial Intelligence Indonesia (APAII) menggelar Pelatihan Nasional AI dalam Digital Marketing Batch I dan II, APAII tidak akan berhenti di Batch I dan II saja loh!! APAII akan mengadakan Pelatihan Nasional AI Dalam Digital Marketing Batch III di Bulan Oktober mendatang yang pastinya akan membawakan materi yang jauh lebih Menarik dan Kece BANGET pastinya!!
                                    </p>
                                    <p class="text-info">
                                        Tingkatkan strategi digital marketing kamu dengan keahlian AI terbaru dari APAII! Ikuti pelatihan ini dan kuasai skill dan materinya yang akan membawa kamu ke level berikutnya dalam dunia digital!!!
                                    </p>
                                    <p class="font-italic text-light">SO DON'T FORGET TO JOIN WITH US AND LEARN TOGETHER ABOUT AI!!!</p>
                                    <p style="color: #FFD700; font-weight: bold;">Jangan lewatkan kesempatan emas ini! Ayo bersama-sama tingkatkan keterampilan di era digital!!</p>

                                </div>

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <img src="assets/img/ai dalam digital marketing.png" class="img-fluid mx-auto d-block rounded shadow-lg" alt="AI Dalam Digital Marketing">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Link Sosmed -->
                                <div class="mb-3">
                                    <label for="link_sosmed" class="form-label">Link Sosmed hasil Share:</label>
                                    <textarea class="form-control" rows="3" name="link_sosmed" id="link_sosmed" required><?php echo $link_sosmed; ?></textarea>
                                    <?php echo form_error('link_sosmed') ?>
                                </div>
                            </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('register_form') ?>" class="btn btn-default">Cancel</a>
                    </form>
                </div>

                <script>
                    // Function to toggle the display of the social media sharing section
                    function toggleSosmedSection() {
                        var kategoriPelatihan = document.getElementById('kategori_pelatihan').value;
                        var sosmedSection = document.getElementById('sosmed_section');

                        if (kategoriPelatihan === 'Gratis') {
                            sosmedSection.style.display = 'block'; // Show the section when Gratis is selected
                        } else {
                            sosmedSection.style.display = 'none'; // Hide the section for Berbayar
                        }
                    }

                    // Ensure the correct section is displayed when the page is loaded (in case the form is being edited)
                    document.addEventListener('DOMContentLoaded', function() {
                        toggleSosmedSection();
                    });
                </script>

            </div><!-- End Contact Form -->

            </div>

            </div>
            </div>

        </section><!-- /Contact Section -->

    </main>
    </div>
   <!-- Footer Section -->
<footer id="footer" class="footer" style="background: linear-gradient(135deg, #1f3c88, #00a8ff); padding: 40px 0; color: #fff;">

<!-- Newsletter Section -->
<div class="footer-newsletter" style="background-color: rgba(255, 255, 255, 0.1); padding: 30px 0;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h4 style="color: #ffeb3b;">Dapatkan Update Terbaru!</h4>
                <p style="color: #e0f7fa;">Berlangganan newsletter kami untuk mendapatkan berita dan penawaran eksklusif seputar pelatihan AI dalam Digital Marketing!</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form d-flex justify-content-center">
                        <input type="email" name="email" placeholder="Masukkan email Anda" class="form-control" style="max-width: 400px; border-radius: 50px; padding: 10px;">
                        <input type="submit" value="Subscribe" class="btn btn-primary" style="background-color: #ffeb3b; color: #1f3c88; padding: 10px 30px; border-radius: 50px; margin-left: 10px;">
                    </div>
                    <div class="loading" style="color: #fff;">Loading</div>
                    <div class="error-message" style="color: #ffeb3b;"></div>
                    <div class="sent-message" style="color: #81d4fa;">Permintaan langganan Anda telah dikirim. Terima kasih!</div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Section -->

<!-- Footer Content -->
<div class="container footer-top">
    <div class="row gy-4">
        <!-- About APAII -->
        <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="d-flex align-items-center">
                <span class="sitename" style="color: #ffeb3b; font-size: 1.5rem; font-weight: bold;">APAII</span>
            </a>
            <div class="footer-contact pt-3">
                <p>Jl. Sukses Raya No.108</p>
                <p>Jakarta, Indonesia 10270</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+62 21 1234 5678</span></p>
                <p><strong>Email:</strong> <span>info@apaii.org</span></p>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="col-lg-2 col-md-3 footer-links">
            <h4 style="color: #ffeb3b;">Useful Links</h4>
            <ul>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Home</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">About Us</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Services</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Terms of Service</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div class="col-lg-2 col-md-3 footer-links">
            <h4 style="color: #ffeb3b;">Our Services</h4>
            <ul>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">AI Consulting</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Digital Marketing</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Training & Workshops</a></li>
                <li><i class="bi bi-chevron-right" style="color: #ffeb3b;"></i> <a href="#" style="color: #e0f7fa;">Web Development</a></li>
            </ul>
        </div>

        <!-- Social Media Follow Us -->
        <div class="col-lg-4 col-md-12">
            <h4 style="color: #ffeb3b;">Follow Us</h4>
            <p style="color: #e0f7fa;">Ikuti kami di media sosial untuk mendapatkan berita terbaru tentang pelatihan dan layanan AI kami.</p>
            <div class="social-links d-flex">
                <a href="#" style="color: #ffeb3b;"><i class="bi bi-twitter"></i></a>
                <a href="#" style="color: #ffeb3b; margin-left: 10px;"><i class="bi bi-facebook"></i></a>
                <a href="#" style="color: #ffeb3b; margin-left: 10px;"><i class="bi bi-instagram"></i></a>
                <a href="#" style="color: #ffeb3b; margin-left: 10px;"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Content -->

<!-- Footer Copyright -->
<div class="container text-center mt-4">
    <p style="color: #fff;">© <strong>2024 APAII</strong> All Rights Reserved</p>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/" style="color: #ffeb3b;">BootstrapMade</a>
    </div>
</div>
<!-- End Footer Copyright -->

</footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>

    <!-- Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

    <!-- form baru Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>