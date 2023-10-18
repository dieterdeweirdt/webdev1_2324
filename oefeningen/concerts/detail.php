<?php
include 'functions/concerts.php';
include 'partials/header.php';

$v_id = $_GET['q_id'];

echo $v_id;

//include 'data/concerts.php';
//$item = $concerts[$v_id];

include 'includes/db.php';

$sql = 'SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
JOIN artists ON concerts.artist_id = artists.artist_id
JOIN locations ON concerts.location_id = locations.location_id WHERE concert_id = :temp_id';

$stmnt = $db->prepare($sql);
$stmnt->bindValue(':temp_id', $v_id);
$stmnt->execute();
$item = $stmnt->fetch();

if(!$item) {
    header('location: index.php');
}


?>

<h1><?= $item['title']; ?></h1>
<div><?= $item['artist']; ?></div>
<div>Datum: <?= $item['date']; ?></div>
<div>Locatie: <?= $item['location']; ?></div>

<h2>Nog andere</h2>
<?php

$concerts = getConcerts();

foreach( $concerts as $key => $item ) {
    //echo '<div>' . $item['artist'] . '</div>';
    include 'views/concert_item.php';
}

include 'partials/footer.php';