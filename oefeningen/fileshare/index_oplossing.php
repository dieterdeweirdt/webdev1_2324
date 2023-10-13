<?php
$dir = __DIR__ . '/uploads';

$current_folder = ( $_GET['current_folder'] ?? '' );

if(count($_FILES)) {
    $file = $_FILES['file'];
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    $path = pathinfo($name);
    $extension = $path['extension'];
    //$new_name = uniqid() . ".$extension";
    move_uploaded_file($tmp, "$dir/$current_folder/$name");
}

if(isset($_POST['foldername'])) {
    $folder = $_POST['foldername'];
    var_dump("$dir/$folder");
    if(!is_dir("$dir/$folder")) {
        mkdir("$dir/$folder");
    }
    
}

$files = scandir($dir . '/' . $current_folder);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileDrop</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav>
        <div class="brand">FileDrop</div>
        <a href="index.html">Files</a>
        <a href="#">Sharing</a>
        <a href="#">Recents</a>
        <a href="#">File requests</a>
        <a href="#">Deleted files</a>
    </nav>
    <main>
        <div class="top">
        <h1>Files &gt; </h1>
        <form class="search">
            <input type="search" placeholder="Search">
            <button>Search</button>
        </form>
        </div>
        <div class="files">
                <div class="header">File</div>
                <div class="header">Size</div>
                <div class="header">Created</div>

                <?php foreach ($files as $file): ?>
                    <?php if ($file === '.' || $file === '..') continue; 
                        $link =  (is_dir("$dir/$file")) ? "index.php?current_folder=" . $file : "/uploads/$file";
                    ?>
                    <div><a href="<?= $link; ?>"><?= $file ?></a></div>
                    <div>200KB</div>
                    <div>7/10/2023 10:48</div>
                <?php endforeach; ?>           
        </div>
        <form class="upload" method="POST" enctype="multipart/form-data">
            <label>Upload een bestand: <input type="file" name="file" id="file"></label>
            <button type="submit" name="upload">Upload</button>
        </form>

        <form class="upload" method="POST">
            <label>Maak folder: <input type="text" name="foldername"></label>
            
            <button type="submit">Create</button>
        </form>
    </main>

    <script src="https://kit.fontawesome.com/8bf80026e5.js" crossorigin="anonymous"></script>
</body>
</html>