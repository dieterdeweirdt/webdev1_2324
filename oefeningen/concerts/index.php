<h1>Concerten</h1>
<?php
//include 'data/concerts.php';
//print_r($concerts);
include 'includes/db.php';

$sql = "SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
JOIN artists ON concerts.artist_id = artists.artist_id
JOIN locations ON concerts.location_id = locations.location_id";

$statement = $db->prepare($sql);
//bind
$statement->execute();
$concerts = $statement->fetchAll();

foreach( $concerts as $key => $item ) {
    //echo '<div>' . $item['artist'] . '</div>';
    include 'views/concert_item.php';
}