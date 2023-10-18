<div class="concert">
    <h2><?php echo $item['title']; ?></h2>
    <img src="media/<?= $item['artist'] ?>.jpg">
    <p><?= $item['artist'] ?></p>
    <a href="detail.php?q_id=<?= $item['concert_id']; ?>">meer info...</a>
</div>