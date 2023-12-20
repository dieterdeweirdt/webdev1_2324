<div class="article_detail">
    <img src="<?= $article->getImagePath(); ?>" alt="">
    <h1><?= $article->title; ?></h1>
    <p>Geplaatst door <a href="/user/<?= $article->user()->user_id; ?>"><?= $article->user()->fullname(); ?></a> op <?= date_format(date_create($article->created_on),"d M Y H:i"); ?></p>
    <div class="tags">
        <?php foreach ($article->getTags() as $tag): ?>
            <a href="/tags/<?= $tag->tag_id ?>">
                <?= $tag->name ?>
            </a>
        <?php endforeach; ?>
    <p><?= $article->content; ?></p>
    <h2>Comments</h2>
    <?php foreach($comments as $comment): ?>
        <div>
            <?= $comment->content; ?>
            <hr>
        </div>
        <?php endforeach; ?>
</div>