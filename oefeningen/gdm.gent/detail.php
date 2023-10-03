
<?php

include 'partial/header.php';

//1. connectie maken met database
include_once 'includes/db.php';

//id ophalen uit de url (query)
$id = $_GET['id'];

//sql
$sql = "SELECT * FROM db.projects WHERE project_id = :id";

//prepare
$statement = $db->prepare($sql);

//binden van variabelen
$statement->bindParam(':id', $id);

//uitvoeren
$statement->execute();

//ophalen
$project = $statement->fetch();

?>

<h2><?= $project['title'] ?></h2>

<p><?= $project['description'] ?></p>

<a href="index.php">&lt; alle projecten</a>

<?php

include 'partial/footer.php';

