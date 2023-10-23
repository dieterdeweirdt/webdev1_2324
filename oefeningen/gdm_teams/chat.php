<?php
require_once 'includes/db.php';

$v_id = $_GET['id'];

if( isset( $_POST['message'] ))
{
    //Bericht toevoegen
    $sql = "INSERT INTO message (user_id, team_id, message, created_on) 
            VALUES (:user_id, :team_id, :message, NOW() );";
    $stmnt = $db->prepare($sql);
    $stmnt->bindValue(':user_id', 7);
    $stmnt->bindValue(':team_id', $v_id);
    $stmnt->bindValue(':message', $_POST['message']);
    $stmnt->execute();
}

//Alle berichten ophalen
$sql = "SELECT * FROM message 
        JOIN user ON message.user_id = user.user_id 
        WHERE team_id = :temp_id ";

$stmnt = $db->prepare($sql);
$stmnt->bindParam(':temp_id', $v_id);
$stmnt->execute();
$messages = $stmnt->fetchAll(PDO::FETCH_OBJ);

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
        <a href="index.php" class="brand">&laquo;</a>
        <div class="team">Web Development 1</div>
        <div class="user">
            Hi, Armando
            <div class="initials">AR</div>
        </div>
    </header>
    <section class="chat">

        <?php foreach($messages as $message) {
            include 'views/message_item.php';
        } ?>

        <form method="POST">
            <div class="inner">
                <input type="text" name="message">
                <input type="submit" value="Send">
            </div>
        </form>
    </section>
    
    <script>
        var scrollingElement = document.body;
        scrollTo(0, scrollingElement.scrollHeight);
    </script>

</body>
</html>