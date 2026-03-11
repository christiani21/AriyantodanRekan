<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Admin Panel' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { background:#f8f9fa; }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #1e293b;
            color: white;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 6px;
        }
        .sidebar a:hover {
            background: #334155;
            color: white;
        }
        .card-stat {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar p-4">
        <h4 class="mb-4">Admin Panel</h4>

        <a href="<?= base_url('admin') ?>">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="<?= base_url('admin/blog') ?>">
            <i class="bi bi-journal-text"></i> Manajemen Blog
        </a>

        <hr class="bg-light">

        <a href="<?= base_url('logout') ?>" class="text-danger">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

    <!-- Main Content -->
    <div class="flex-fill p-4">
        <?= $this->renderSection('content') ?>
    </div>

</div>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>
