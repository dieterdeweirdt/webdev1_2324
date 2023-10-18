<?php

function getConcerts () {
    global $db;

    $sql = "SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
    JOIN artists ON concerts.artist_id = artists.artist_id
    JOIN locations ON concerts.location_id = locations.location_id";


    $statement = $db->prepare($sql);
    //bind
    $statement->execute();
    return $statement->fetchAll();
    
}