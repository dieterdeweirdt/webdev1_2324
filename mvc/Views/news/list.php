<h1>Blog</h1>
Dit is de view van onze nieuws overzichtpagina

<?php foreach($all_news as $item) : ?>
    <?php if (true) : ?> 
<a href="/news/detail/<?= $item['slug'] ?>"><?= $item['title'] ?></a>
    <?php endif; ?>
<?php endforeach; ?>
