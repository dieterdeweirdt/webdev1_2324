<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php 
include_once "data.php";

//zoeken

$search_term = '';
if( isset($_GET['type']) ) {
    $search_term = $_GET['type'];
}

?>
<p>
<form method="GET">
    <input type="text" name="type" placeholde="zoekterm" value="<?php echo $search_term; ?>">
    <input type="submit" name="filter" value="Zoeken">
</form>
</p>

<div class="cars">
<?php
    foreach ( $cars as  $car )
    {
        $car = (object) $car;

        //var_dump( strpos( strtolower($car->type), strtolower($search_term) ) );

        if(!$search_term || strpos(strtolower($car->brand . ' ' . $car->type), strtolower($search_term)) !== false) {
            ?>
                <div class="car">
                    <h2><?php echo $car->brand . ' ' . $car->type; ?></h2>
                    <img src="cars/<?php echo $car->image; ?>">
                    <dl>
                        <dt>Brandstof</dt>
                        <dd><?php echo $car->fuel; ?></dd>
                        <dt>Prijs vanaf</dt>
                        <dd><?php echo '€ ' . number_format($car->price_from, 0 , "," , "." ); ?></dd>
                    </dl>
                </div>
            <?php
        }
    }
?>
</div>
</body>
</html>