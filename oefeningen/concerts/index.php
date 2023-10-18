<?php 
include 'functions/concerts.php';
include 'partials/header.php';

echo '<h1>Concerten</h1>';

//include 'data/concerts.php';
//print_r($concerts);
include 'includes/db.php';

$concerts = getConcerts();

foreach( $concerts as $key => $item ) {
    //echo '<div>' . $item['artist'] . '</div>';
    include 'views/concert_item.php';
}

include 'partials/footer.php';