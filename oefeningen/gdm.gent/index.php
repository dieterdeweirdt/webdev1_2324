
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

    //lus schrijven

    foreach ($projects as $project) {
        include 'views/project_card.php';
        //echo '<h2>' . $project['title'] . '</h2>';
        //echo '<p>' . $project['description'] . '</p>';
    }

    include 'partial/footer.php';

