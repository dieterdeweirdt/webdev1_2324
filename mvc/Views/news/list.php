<h1>Blog</h1>
Dit is de view van onze nieuws overzichtpagina

<?php foreach($all_news as $item) : ?>
<a href="/news/detail/<?= $item['slug'] ?>"><?= $item['title'] ?></a>
<?php endforeach; ?>
