<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - Ariyanto & Rekan</title>
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

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url('beranda') ?>" class="logo d-flex align-items-center">
        <img src="assets/img/logo1.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
          <li><a href="<?= base_url('tentang_kami') ?>">Tentang Kami</a></li>
          <li><a href="<?= base_url('layanan') ?>">Layanan Hukum</a></li>
          <li><a href="<?= base_url('rekan') ?>">Rekan</a></li>
          <li><a href="<?= base_url('blog') ?>" class="active">Blog</a></li>
          <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>

          <?php

          if (session()->get('isLoggedIn')): ?>
                    <?php else: ?>
                        <li><a href="<?= base_url('login') ?>">Login Admin</a></li>
                    <?php endif; ?>
                    <div class="text-end mb-3">
                    </div>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="beranda">Beranda</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Category Dropdown -->
      <div class="blog-filter-wrapper">
        
        <div class="filter-box">
          <div class="filter-toggle">
            <i class="bi bi-funnel"></i>
            <span>Kategori</span>
            <i class="bi bi-chevron-down"></i>
          </div>

          <ul class="filter-dropdown">
            <?php foreach ($categories as $cat): ?>
              <li>
                <a href="<?= base_url('blog/category/'.$cat['category']) ?>">
                  <?= esc($cat['category']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

        <script>console.log(<?= json_encode($posts) ?>);</script>
        <?php if (!empty($posts)) : ?>
          
        <?php foreach ($posts as $post) : ?>

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <?php if (!empty($post['image'])) : ?>
                  <img src="<?= base_url('uploads/' . $post['image']) ?>" class="img-fluid">
                <?php else : ?>
                  <img src="<?= base_url('assets/img/blog/blog-1.png') ?>" class="img-fluid">
                <?php endif; ?>
              </div>

              <p class="post-category">
                <?= esc($post['category'] ?? 'Umum') ?>
              </p>


              <h2 class="title">
                <a href="<?= base_url('blog/detail/' . $post['id']) ?>">
                  <?= esc($post['title']) ?>
                </a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="<?= base_url('assets/img/blog/blog-author.png') ?>" 
                     class="img-fluid post-author-img flex-shrink-0">

                <div class="post-meta">
                  <p class="post-author">Admin</p>
                  <p class="post-date">
                    <time>
                      <?= date('d M Y', strtotime($post['created_at'])) ?>
                    </time>
                  </p>
                </div>
              </div>

              <?php if (session()->get('isLoggedIn')) : ?>
                <div class="mt-3">
                  <a href="<?= base_url('blog/edit/' . $post['id']) ?>" 
                     class="btn btn-sm btn-warning">Edit</a>

                  <a href="<?= base_url('blog/delete/' . $post['id']) ?>" 
                     onclick="return confirm('Yakin ingin hapus artikel ini?')" 
                     class="btn btn-sm btn-danger">Delete</a>
                </div>
              <?php endif; ?>

            </article>
          </div>

        <?php endforeach; ?>
      <?php else : ?>
        <div class="col-12 text-center">
          <p>Belum ada artikel tersedia.</p>
        </div>
      <?php endif; ?>

        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>