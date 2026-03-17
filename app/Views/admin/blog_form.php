<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">
    <?= isset($post) ? 'Edit Artikel' : 'Tambah Artikel' ?>
</h2>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="<?= isset($post) 
            ? base_url('admin/blog/update/' . $post['id']) 
            : base_url('admin/blog/store') ?>" 
            method="post">

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" 
                       class="form-control"
                       value="<?= $post['title'] ?? '' ?>" required>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Hukum Perdata" <?= isset($post) && $post['category']=='Hukum Perdata' ? 'selected':'' ?>>Hukum Perdata</option>
                        <option value="Hukum Pidana" <?= isset($post) && $post['category']=='Hukum Pidana' ? 'selected':'' ?>>Hukum Pidana</option>
                        <option value="Hukum Tata Usaha Negara" <?= isset($post) && $post['category']=='Hukum Tata Usaha Negara' ? 'selected':'' ?>>Hukum Tata Usaha Negara</option>
                        <option value="Hukum Ketenagakerjaan" <?= isset($post) && $post['category']=='Hukum Ketenagakerjaan' ? 'selected':'' ?>>Hukum Ketenagakerjaan</option>
                        <option value="Hukum Keluarga" <?= isset($post) && $post['category']=='Hukum Keluarga' ? 'selected':'' ?>>Hukum Keluarga</option>
                        <option value="Hukum Hak Kekayaan Intelektual" <?= isset($post) && $post['category']=='Hukum Hak Kekayaan Intelektual' ? 'selected':'' ?>>Hukum Hak Kekayaan Intelektual</option>
                        <option value="Hukum Perbankan dan Keuangan" <?= isset($post) && $post['category']=='Hukum Perbankan dan Keuangan' ? 'selected':'' ?>>Hukum Perbankan dan Keuangan</option>
                        <option value="Hukum Bisnis" <?= isset($post) && $post['category']=='Hukum Bisnis' ? 'selected':'' ?>>Hukum Bisnis</option>
                        <option value="Hukum Agraria" <?= isset($post) && $post['category']=='Hukum Agraria' ? 'selected':'' ?>>Hukum Agraria</option>
                    </select>
                </div>

                <?php if(isset($post) && $post['image']) : ?>
                    <img src="<?= base_url('uploads/'.$post['image']) ?>" width="150" class="mb-3">
                <?php endif; ?>

            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea name="content" 
                          class="form-control" 
                          rows="6" required><?= $post['content'] ?? '' ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                <?= isset($post) ? 'Update' : 'Simpan' ?>
            </button>

            <a href="<?= base_url('admin/blog') ?>" 
               class="btn btn-secondary">
               Kembali
            </a>

        </form>

    </div>
</div>

<?= $this->endSection() ?>
