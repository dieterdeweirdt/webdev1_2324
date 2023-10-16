<div class="concert">
    <h2><?php echo $item['concert']; ?></h2>
    <img src="media/<?= $item['artist'] ?>.jpg">
    <p><?= $item['artist'] ?></p>
    <a href="detail.php?q_id=<?= $key; ?>">meer info...</a>
</div>