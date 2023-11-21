<?php
require 'app.php';
checkUser();

$current_category = $_GET['category_id'] ?? 0;

$categories = getCategories();
$buttons = getButtonsByCategory($current_category);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeWeirdt</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/fontawsome/css/all.min.css">
</head>
<body>
    <div class="roomlist">
        <?php foreach($categories as $category) {
            include __DIR__ . "/view/category.php";
        } ?>
    </div>
    <div class="buttonlist">
    <?php foreach($buttons as $button) {
        include __DIR__ . "/view/button.php";
    } ?>
    </div>
</body>
</html>