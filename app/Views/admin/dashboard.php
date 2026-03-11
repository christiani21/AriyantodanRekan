<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card card-stat shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6>Total Artikel</h6>
                    <h3><?= $totalPosts ?></h3>
                </div>
                <i class="bi bi-journal-text fs-1 text-primary"></i>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <a href="<?= base_url('admin/blog/create') ?>" 
       class="btn btn-success">
       + Tambah Artikel
    </a>
</div>

<?= $this->endSection() ?>
