<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    
    <?php
        include_once 'data.php';

        foreach ( $colors as $color )
        {
            echo '<div class="color" style="background:' . $color . '">' . $color . '</div>';
        }
    ?>

    <h2>50 shades of grey</h2>

    <?php
        for( $teller = 0 ; $teller < 50 ; $teller++ ) {
           echo '<div class="color" style="background:hsl(0,0%,' . ($teller*2) . '%);"></div>';
        }
    ?>

    <h2>Rainbow</h2>

    <?php
        for( $h = 0 ; $h < 360 ; $h++) {
            for( $l = 0 ; $l < 100 ; $l++) {
                ?><div class='color-small' style="background-color:hsl(<?php echo $h; ?>, 100%, <?php echo $l; ?>%)">
                </div><?php
            }
        }
    ?>

</body>
</html>