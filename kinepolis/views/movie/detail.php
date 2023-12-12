<h1><?= $movie->title; ?></h1>
<?= $movie->description; ?>

<div class="comments">

<?php foreach ($comments as $comment) {
    include '_partial/comment.php';
} ?>

</div>