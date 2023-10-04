
<?php

include 'partial/header.php';

//1. connectie maken met database
include_once 'includes/db.php';

//2. query schrijven
$sql = "SELECT * FROM db.projects";

//3. query uitvoeren
$statement = $db->query($sql);

//4. resultaat verwerken
$projects = $statement->fetchAll();

//print_r($projects);
 ?>

<h1>Projects</h1>

<form>
    <input type="text" name="search" placeholder="Search">
    <input type="submit" value="Search">
</form>

<div class="projects">
    <?php
    //lus schrijven

    foreach ($projects as $project) {
        include 'views/project_card.php';
        //echo '<h2>' . $project['title'] . '</h2>';
        //echo '<p>' . $project['description'] . '</p>';
    }
    ?>
</div>
    
<?php
include 'partial/footer.php';

