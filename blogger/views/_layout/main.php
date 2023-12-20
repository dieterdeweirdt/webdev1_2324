<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/main.css?v=<?php if( $_ENV['DEV_MODE'] == "true" ) { echo time(); }; ?>">
</head>
<body>

    <a href="/" class="brand">Blogger</a>
    <nav>
    <?php 
        $tags = \App\Models\Tag::all();
        foreach ($tags as $tag): ?>
            <a href="/tags/<?= $tag->tag_id ?>" class="<?= ($tag->tag_id == $current_tag) ? 'active' : '' ?>">
                <?= $tag->name ?>
            </a>
        <?php endforeach; ?>
        <a href="/article/add" class="btn">+ add article</a>
    </nav>

    <div class="user">
        <?php 
        global $user;
        if($user) : ?>
            <img src="/images/user.jpeg" alt="">
            <div class="name"><?= $user->fullname(); ?></div>
            <a href="/logout">logout</a>
        <?php else : ?>
            <a href="/login">login</a>
            <a href="/register">register</a>

        <?php endif; ?>
    </div>

    <main>
        <?php if(isset($_GET['error'])): ?>
            <p class="error"><?= $_GET['error'] ?></p>
        <?php endif; ?>

        <?= $content; ?>
    </main>
    
    <footer>
        &copy; <?= date('Y'); ?> - FIRSTNAME LASTNAME
    </footer>
</body>
</html>