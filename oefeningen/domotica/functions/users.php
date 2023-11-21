<?php
function getUserByEmail($email) {
    global $db;
    //sql schrijven
    $sql = "SELECT * FROM users WHERE email = ?";
    //uitvoeren
    $stmnt = $db->prepare($sql);
    $stmnt->execute([$email]);
    //data ophalen
    return $stmnt->fetchObject();
}