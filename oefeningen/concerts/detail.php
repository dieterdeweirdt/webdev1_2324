<?php
$v_id = $_GET['q_id'];

echo $v_id;

include 'data/concerts.php';

$item = $concerts[$v_id];
?>
<h1><?= $item['concert']; ?></h1>
<div><?= $item['artist']; ?></div>
<div>Datum: <?= $item['date']; ?></div>
<div>Locatie: <?= $item['location']; ?></div>