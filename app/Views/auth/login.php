<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto">

        <div class="card shadow">
            <div class="card-body">
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

                    <div class="mb-3">
                        <input type="password" name="password" 
                               class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">
                        Login
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>
