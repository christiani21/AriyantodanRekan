<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Blog - Ariyanto & Rekan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

<body class="blog-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo1.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <a href="<?= base_url('beranda') ?>">Beranda</a>
        <a href="<?= base_url('tentang_kami') ?>">Tentang Kami</a>
        <a href="<?= base_url('layanan') ?>">Layanan Hukum</a>
        <a href="<?= base_url('rekan') ?>">Rekan</a>
        <a href="<?= base_url('blog') ?>">Blog</a>
        <a href="<?= base_url('kontak') ?>">Kontak</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Detail Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
            <li class="current">Detail Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <h1 class="title"><?= esc($post['title']) ?></h1>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?= date('d F Y', strtotime($post['created_at'])) ?></a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <?php 
                  use App\Models\PostModel;
                  $PostModel = new PostModel();
                  $post = $PostModel->find($post['id']);
                  ?>


                  <p><?= esc($post['content']) ?></p>

                  <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Blog Author Widget -->
            <div class="blog-author-widget widget-item">

              <div class="d-flex flex-column align-items-center">
                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                <h4>Ariyanto & Rekan</h4>
                <div class="social-links">
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
                  <a href="https://linkedin.com/#"><i class="bi bi-linkedin"></i></a>
                </div>

                <p>
                  Firma hukum yang bergerak di bidang pelayanan bantuan hukum dengan fokus pada profesionalisme advokat dan penegakan supremasi hukum.
                </p>

              </div>
            </div><!--/Blog Author Widget -->
          </div>

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Memerlukan Bantuan Hukum?</h4>
            <p>Segera kontak kami melalui WhatsApp atau email!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Kirim"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan anda telah dikirim. Terima kasih!</div>
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
            <li><i class="bi bi-chevron-right"></i> <a href="#">Litigasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Non-Litigasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Retainer</a></li>
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
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>