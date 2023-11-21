<?php

function getCategories() {
    global $db;
    //sql schrijven
    $sql = "SELECT * FROM categories";
    //uitvoeren
    $stmnt = $db->prepare($sql);
    $stmnt->execute();
    //data ophalen
    return $stmnt->fetchAll(PDO::FETCH_OBJ);
}