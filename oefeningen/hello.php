<!DOCTYPE html>
<html>
<body>

<?php

$person = $_GET['person'] ?? 'you';
/*
eventueel daartussen
enkele lijenn
comment hebt
*/

echo '<h1>Hello  ' . $person .  ' !</h1>';

$colors = ['red', 'green', 'blue'];

$boolean = false;

//Enkel voor debuggen
//print_r( $colors );
//var_dump($colors);

foreach ($colors as $color) {
    echo '<p style="color:' . $color . '">' . $color . '</p>';
    echo "<p style=\"color:$color\">$color</p>" ;
}






?>

<p>Wie ben jij?</p>
<form method="GET">
<input type="text" name="person" id="name">
<input type="submit" value="Submit">
</form>

</body>
</html>