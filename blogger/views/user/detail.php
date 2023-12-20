<h1><?= $user->firstname . ' ' . $user->lastname; ?></h1>

<div class="articles">
    <?php foreach ($articles as $article): ?>
        <a href="/article/<?= $article->article_id ?>" class="article">
            <img src="<?= $article->getImagePath() ?>" alt="">
            <div class="title"><?= $article->title ?></div>
        </a>
    <?php endforeach; ?>
</div>
