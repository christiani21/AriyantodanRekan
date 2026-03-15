<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ariyanto & Rekan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo1.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="" class="active">Beranda</a></li>
          <li><a href="tentang_kami">Tentang Kami</a></li>
          <li><a href="layanan">Layanan Hukum</a></li>
          <li><a href="rekan">Rekan</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h2>Ariyanto & Rekan</h2>
              <h3>Officium Nobile</h3>
              <a href="tentang_kami" class="btn-get-started">Lanjut Baca</a>
            </div>
          </div><!-- End Carousel Item -->

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-3 justify-content-center text-center">

          <!-- LITIGASI -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="cursor:pointer;">
            <div class="service-item item-cyan position-relative service-click"
                data-title="Litigasi"
                data-desc="Memberikan jasa hukum dalam arti yang seluas-luasnya sehubungan dengan masalah atau sengketa yang timbul di bidang hukum baik di bidang hukum Pidana, Perdata, Pengadilan Agama, Niaga dan Tata Usaha Negara. Memberikan jasa hukum dalam tingkat penyelidikan, penyidikan di tingkat Kepolisian Negara RI (POLRI), penuntutan pada tingkat Kejaksaan hingga proses berpekara di Pengadilan (Pengadilan Negeri, Pengadilan Tinggi, Pengadilan Niaga, PTUN dan Mahkamah Agung RI); Memberikan jasa hukum melalui penyelesaian sengketa alternative seperti arbitrase, mediasi, negosiasi baik dalam tingkat nasional maupun internasional."
                data-icon="bi-bank"
                data-bs-toggle="modal"
                data-bs-target="#serviceModal">

              <div class="icon">
                <i class="bi bi-bank"></i>
              </div>

              <h3>Litigasi</h3>

              <p>
                Penanganan perkara hukum secara profesional dan strategis.
              </p>

            </div>
          </div>

          <!-- NON LITIGASI -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200" style="cursor:pointer;">
            <div class="service-item item-orange position-relative service-click"
                data-title="Non-Litigasi"
                data-desc="Memberikan jasa hukum sehubungan dengan masalah korporasi/Perusahaan, antara lain menyangkut masalah pendirian Perseroan Terbatas (PT), Penanaman Modal Dalam Negeri (PMDN), Penanaman Modal Asing (PMA), Persekutuan Perdata, Yayasan dan Koperasi; Memberikan jasa hukum dalam bentuk konsultasi, perancangan kontrak, pendapat hukum (legal advice), pemeriksaan hukum (legal audit), negosiasi, sehubungan dengan rencana rencana pembentukkan usaha patungan, penggabungan, pengambil alihan, pembubaran perseroan (kepailitan), jual beli asset perusahaan, restrukturisasi perusahaan, penawaran umum (go public) dan lain-lain."
                data-icon="bi-briefcase"
                data-bs-toggle="modal"
                data-bs-target="#serviceModal">

              <div class="icon">
                <i class="bi bi-briefcase"></i>
              </div>

              <h3>Non-Litigasi</h3>

              <p>
                Solusi hukum preventif dan konsultatif untuk perusahaan.
              </p>

            </div>
          </div>

          <!-- RETAINER -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300" style="cursor:pointer;">
            <div class="service-item item-teal position-relative service-click"
                data-title="Retainer"
                data-desc="Selain itu A&R dapat juga menangani sistem Retainer klien yakni melayani konsultasi hukum terkait permasalahan aspek-aspek hukum positif yang berlaku dalam periode tertentu."
                data-icon="bi-shield-check"
                data-bs-toggle="modal"
                data-bs-target="#serviceModal">

              <div class="icon">
                <i class="bi bi-shield-check"></i>
              </div>

              <h3>Retainer</h3>

              <p>
                Layanan hukum berkelanjutan dengan sistem retainer.
              </p>

            </div>
          </div>

        </div>

      </div>


    </section><!-- /Featured Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Visi dan Misi</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Visi</h3>
            <p class="fst-italic">
              Menjadikan ARIYANTO & REKAN sebagai wadah profesional advokat dan praktisi hukum dalam menjalankan Officium Nobile (Profesi Mulia)
            </p>
            <h3>Misi</h3>
            <p class="fst-italic">
              Menempatkan hukum sebagai aspek tertinggi dalam kehidupan berbangsa dan bernegara melalui pelayanan hukum yang profesional, adil, dan berintegritas
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- Features Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Memerlukan Bantuan Hukum?</h4>
            <p>Segera kontak kami melalui WhatsApp atau email!</p>
            <form action="<?= base_url('kirim_email') ?>" method="post">
              <div class="newsletter-form">
                <input type="email" name="email" required>
                <input type="submit" value="Kirim">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Ariyanto dan Rekan</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Ruko Verbena JI. Boulevard Grand Depok City</p>
            <p>Blok B, No. 9, Kel. Tirtajaya, Kec. Sukmajaya,</p>
            <p>Kota Depok - Jawa Barat</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="beranda">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="tentang_kami">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="layanan">Layanan Hukum</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="rekan">Rekan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="blog">Blog</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="layanan">Litigasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="layanan">Non-Litigasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="layanan">Retainer</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Kontak Kami</h4>
            <p><strong>Phone:</strong> <span><a href="https://wa.me/628131964533?text=Halo,%20saya%20butuh%20bantuan%20untuk%20permasalahan%20hukum.">0813 1964 533</a></span></p>
            <p><strong>Email:</strong> <span><a href="mailto:kantorariyantodanrekan@gmail.com">kantorariyantodanrekan@gmail.com</a></span></p>
          <div class="social-links d-flex">
            <a href="https://www.youtube.com/@AriyantodanRekan"><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© 2026 <span>Copyright</span> <strong class="px-1 sitename">Ariyanto dan Rekan</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

      <div class="modal fade" id="serviceModal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-4 rounded-4">

          <div class="text-end">
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="text-start">

            <div class="mb-3">
              <i id="modalIcon" class="bi fs-1"></i>
            </div>

            <h3 id="modalTitle"></h3>

            <p id="modalDesc" class="mt-3"></p>

          </div>

        </div>
      </div>
    </div>
        <script>
        document.querySelectorAll(".service-click").forEach(card => {

          card.addEventListener("click", function(){

            document.getElementById("modalTitle").innerText = this.dataset.title;
            document.getElementById("modalDesc").innerText = this.dataset.desc;

            let icon = document.getElementById("modalIcon");
            icon.className = "bi fs-1 " + this.dataset.icon;

          });

        });
        </script>

</body>

</html>