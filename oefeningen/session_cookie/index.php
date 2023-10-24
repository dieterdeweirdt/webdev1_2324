<?php
session_start();

$person_c = $_COOKIE['person'] ?? 'unknown';

if(isset( $_POST['person_c'] )) {
    //het cookie form is ingevuld
    $person_c = $_POST['person_c'];
    setcookie('person', $person_c, time() + 60*60*24*10);
}

$person_s = $_SESSION['person'] ?? 'unknown';

if(isset( $_POST['person_s'] )) {
    //het session form is ingevuld
    $person_s = $_POST['person_s'];
    $_SESSION['person'] = $person_s;
}


/*
//Voorbeeld van converteren array naar json string en opslaan in cookie
setcookie('cart', json_encode([5 => 2, 10 => 1, 100 => 10]), time() + 60*60*60*24*10);
$cart = json_decode( $_COOKIE['cart'] );
var_dump($cart);
*/

?><!DOCTYPE html>
<html>
<body>
<h1>Hello,</h1>

<p>Volgens mijn cookies ben jij <?= $person_c; ?></p>
<p>Volgens mijn session ben jij <?= $person_s; ?></p>

<!-- Cookie Form -->
<h2>Wie ben jij (cookie)?</h2>
<form method="POST">
<input type="text" name="person_c" id="name">
<input type="submit" value="Submit">
</form>

<!-- Session Form -->
<h2>Wie ben jij (session)?</h2>
<form method="POST">
<input type="text" name="person_s" id="name">
<input type="submit" value="Submit">
</form>
<a href="logout.php">Log out</a>

</body>
</html>