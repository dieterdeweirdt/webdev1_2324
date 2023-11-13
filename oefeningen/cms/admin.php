<?php
require_once 'includes/db.php';
require 'models/page.php';

$slug = $_GET['page'] ?? 'home';

$pages = Page::getAll();
$current_page = Page::getBySlug($slug);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php foreach($pages as $page): ?>
        <a href="index.php?page=<?php echo $page->slug; ?>"><?php echo $page->name; ?></a>
    <?php endforeach; ?>


    <form>
        <input type="text" name="title" value="<?= $current_page->title; ?>">
        <textarea name="content">
        <?= $current_page->content; ?>
        </textarea>
    </form>


    
</body>
</html>