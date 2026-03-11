<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Manajemen Blog</h2>

<a href="<?= base_url('admin/blog/create') ?>" 
   class="btn btn-success mb-3">
   + Tambah Artikel
</a>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Judul</th>
                    <th width="150">Tanggal</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($posts as $post): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($post['title']) ?></td>
                    <td><?= date('d M Y', strtotime($post['created_at'])) ?></td>
                    <td>
                        <a href="<?= base_url('admin/blog/edit/'.$post['id']) ?>" 
                           class="btn btn-warning btn-sm">Edit</a>

                        <a href="<?= base_url('admin/blog/delete/'.$post['id']) ?>" 
                           onclick="return confirm('Hapus artikel ini?')"
                           class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
