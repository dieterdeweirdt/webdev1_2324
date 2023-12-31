<?php
require_once 'includes/db.php';
require 'models/baseModel.php';
require 'models/page.php';
require 'models/project.php';

$slug = $_GET['page'] ?? 'home';

$pages = Page::getAll('pages');
$current_page = Page::getBySlug($slug);

$project = Project::getById('projects', 2);

var_dump($project);

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

    <h1><?= $current_page->title; ?></h1>

    <?= $current_page->content; ?>

</body>
</html>