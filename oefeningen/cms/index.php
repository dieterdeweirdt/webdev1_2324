<?php
require_once 'includes/db.php';

$pages = 'SELECT * FROM pages ORDER BY sort_order ASC';
$pages_statement = $db->prepare($pages);
$pages_statement->execute();
$pages = $pages_statement->fetchAll(PDO::FETCH_OBJ);

$slug = $_GET['page'] ?? 'home';

$sql = 'SELECT * FROM pages WHERE slug = :p_slug';
$page_statement = $db->prepare($sql);
$page_statement->execute([':p_slug' => $slug]);
$current_page = $page_statement->fetchObject();

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