<?php 
if(isset($_POST['submit'])){
    print_r($_POST);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

        <?php for($i = 1; $i <= 30; $i++): ?>
            <?php for($j = 1; $j <= 6; $j++): ?>
                <br><input type="checkbox" name="seat[]" value="<?php echo $i . $j; ?>"> <?php echo $i . $j; ?>
            <?php endfor; ?>
        <?php endfor; ?>

        <input type="hidden" name="flight_id" value="101">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>