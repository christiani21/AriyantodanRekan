<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login Admin - Ariyanto & Rekan</title>
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
    <body class="bg-light">

    <div class="container mt-5">
        <div class="col-md-4 mx-auto">

            <div class="card shadow">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="<?= base_url('assets/img/logo1.png') ?>" alt="Logo" class="img-fluid" style="max-width: 350px;">
                    </div>
                    <h4 class="mb-4 text-center">Login Admin</h4>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('login/process') ?>">
                        <div class="mb-3">
                            <input type="text" name="username" 
                                class="form-control" placeholder="Username" required>
                        </div>

                        <div class="mb-3 position-relative">
                        
                            <input type="password" 
                                    id="password"
                                    name="password"
                                    class="form-control password-input"
                                    placeholder="Password"
                                    required>

                            <span class="toggle-password" onclick="togglePassword()">
                                <i class="bi bi-eye" id="eyeIcon"></i>
                            </span>

                        </div>

                        <button type="submit" class="btn btn-dark w-100">
                            Login
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    
    <script>
        function togglePassword() {
        const password = document.getElementById("password");
        const icon = document.getElementById("eyeIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            password.type = "password";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        }
        }
    </script>

    </body>
</html>
