<?php
include 'functions/concerts.php';
include 'partials/header.php';

$v_id = $_GET['q_id'];

//include 'data/concerts.php';
//$item = $concerts[$v_id];

include 'includes/db.php';

$sql = 'SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
JOIN artists ON concerts.artist_id = artists.artist_id
JOIN locations ON concerts.location_id = locations.location_id WHERE concert_id = :temp_id';

$stmnt = $db->prepare($sql);
$stmnt->bindValue(':temp_id', $v_id);
$stmnt->execute();
$item = $stmnt->fetchObject();

if(!$item) {
    header('location: index.php');
}

if( isset( $_POST['review'] ) ) {
    $form_review = $_POST['review'];
    $form_name = $_POST['name'] ?? '';
    $form_email = $_POST['email'];

    $insert_sql = "INSERT INTO reviews ( name, email, description, concert_id) 
    VALUES (:temp_name, :temp_email, :temp_review, :temp_concert_id);";
    $stmnt = $db->prepare($insert_sql);

    $stmnt->bindValue(':temp_concert_id', $v_id);
    $stmnt->bindValue(':temp_name', $form_name);
    $stmnt->bindValue(':temp_email', $form_email);
    $stmnt->bindValue(':temp_review', $form_review);
    $stmnt->execute();

}


?>

<h1><?= $item->title; ?></h1>
<div><?= $item->artist; ?></div>
<div>Datum: <?= $item->date; ?></div>
<div>Locatie: <?= $item->location; ?></div>

<h2>Reviews</h2>

<form method="POST">
    <label for="name">Naam
        <input type="text" name="name" id="name">
    </label>
    <label>E-mail
        <input type="email" name="email" required>
    </label>
    <label>Jouw review
    <textarea rows="5" id="review" name="review"></textarea>
    </label>
    <button type="submit">Voeg review toe</button>
</form>

<h2>Nog andere</h2>
<?php

$concerts = getConcerts();

foreach( $concerts as $key => $item ) {
    //echo '<div>' . $item['artist'] . '</div>';
    include 'views/concert_item.php';
}

include 'partials/footer.php';