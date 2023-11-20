<?php
require_once __DIR__ . '/includes/db.php';


$cocktail_id = $_POST['cocktail_id'];

//sql schrijven
$sql = "INSERT INTO ratings (cocktail_id, name) VALUES (:cocktail_id, :name)";
//uitvoeren
$stmnt = $db->prepare($sql);
$stmnt->bindValue(':cocktail_id', $cocktail_id);
$stmnt->bindParam(':name', $_POST['name']);
$stmnt->execute();


header("Location: detail.php?cocktail_id=$cocktail_id");