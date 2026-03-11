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
                        <option value="Politik" <?= isset($post) && $post['category']=='Politik' ? 'selected':'' ?>>Politik</option>
                        <option value="Hukum" <?= isset($post) && $post['category']=='Hukum' ? 'selected':'' ?>>Hukum</option>
                        <option value="HAM" <?= isset($post) && $post['category']=='HAM' ? 'selected':'' ?>>HAM</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Gambar Artikel</label>
                    <input type="file" name="image" class="form-control">
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
