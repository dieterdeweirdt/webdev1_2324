<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webdevelopment 1 - Week 1 - Loop</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Webdevelopment 1 - Week 1 - Loop</h1>

    <h2>For lus </h2>

<?php
    // $teller = $teller + 1
    // of korter
    // $teller++

    /*for( $teller = 0 ; $teller < 5000 ; $teller++ ) {
        echo 'Ik zal nooit meer slapen in de les<br>';
    }*/
?>

<h2>Foreach lus</h2>

<div class="cars">
<?php
    include_once 'data.php';

    foreach ( $car_brands as $brand )
    {
        ?>
        <div class="car">
            <h2><?php echo $brand; ?></h2>
            <img src="cars/<?php echo strtolower($brand); ?>.jpg">
        </div>
        <?php
    }
?>
</div>


<h2>While</h2>

<?php

    $teller = 0;

    while ( $teller < 10 ) {

        echo $teller;

        $teller = $teller + 2;
        //$teller++
    }

?>

</body>
</html>