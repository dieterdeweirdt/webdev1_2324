<?php

require_once 'includes/db.php';
//sql alle teams ophalen
$sql = "SELECT * FROM team";
//prepare
$stmnt = $db->prepare($sql);
//execute
$stmnt->execute();
//fetchall
$teams = $stmnt->fetchAll(PDO::FETCH_OBJ);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.html" class="brand">Teams</a>
        <div class="user">
            Hi, Armando
            <div class="initials">AR</div>
        </div>
    </header>
    
    <section class="chat_list">
        
        <?php 
        foreach($teams as $team) {
            include 'views/team_item.php';
        } 
        ?>

    </section>

</body>
</html>