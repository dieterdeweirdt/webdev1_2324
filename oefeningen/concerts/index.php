<h1>Concerten</h1>
<?php
include 'data/concerts.php';
//print_r($concerts);

foreach( $concerts as $key => $item ) {
    //echo '<div>' . $item['artist'] . '</div>';
    include 'views/concert_item.php';
}