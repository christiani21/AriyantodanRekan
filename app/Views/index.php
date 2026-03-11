<h1>Blog</h1>

<a href="/blog/create">Tambah Artikel</a>

<?php foreach ($posts as $post): ?>
    <h2><?= esc($post['title']) ?></h2>
    <p><?= esc($post['content']) ?></p>
    <hr>
<?php endforeach; ?>
