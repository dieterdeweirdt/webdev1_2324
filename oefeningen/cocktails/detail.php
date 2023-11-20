<?php
require_once __DIR__ . '/includes/db.php';


//id uit querystring
$q_id = $_GET['cocktail_id'] ?? 0;

$previous_cocktails = [];

$previous_cocktails[] = $q_id;

setcookie('previous', json_encode($previous_cocktails), time() + 3600);


if(!$q_id) {
    //terug naar home
    header("location:index.php");
}

//sql schrijven
$sql = "SELECT * FROM cocktails WHERE id = :p_id";
//uitvoeren
$stmnt = $db->prepare($sql);
$stmnt->bindParam(':p_id', $q_id);
$stmnt->execute();
//data ophalen
$cocktail = $stmnt->fetchObject();


//sql schrijven
$sql = "SELECT * 
FROM cocktail_ingredient
JOIN ingredients ON cocktail_ingredient.ingredient_id = ingredients.id
WHERE cocktail_id = :p_id";
//uitvoeren
$stmnt = $db->prepare($sql);
$stmnt->bindParam(':p_id', $q_id);
$stmnt->execute();
//data ophalen
$ingredients = $stmnt->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php">Cocktails</a>
    </header>
    <main>
    <h1><?= $cocktail->name; ?></h1>
    <img src="images/cocktails/<?= $cocktail->photo; ?>">
    <?= $cocktail->description; ?>
    <h2>Ingrediënten</h2>
    <dl>
        <dt>rietsuiker</dt>
        <dd>2.0 theelepel</dd><dt>limoensap</dt>
        <dd>20.0 ml</dd><dt>verse munt</dt>
        <dd>16.0 blaadjes</dd><dt>bruiswater</dt>
        <dd>90.0 ml</dd><dt>witte rum</dt>
        <dd>45.0 ml</dd><dt>ijsblokjes</dt>
        <dd>4.0 </dd>
    </dl>    
    <h2>Recept</h2>
    <?= $cocktail->recipe; ?>
    <h2>Reviews</h2>
    <div class="review">
        <div class="rating">****</div>
        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.</div>            
        <div class="user">Door: Dieter DW</div>
    </div>
    <div class="review">
        <div class="rating">****</div>
        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.</div>            
        <div class="user">Door: Dieter DW</div>
    </div>
    <h3>Plaats een review</h3>
    <form method="POST" action="post_review.php">
        <label>
            <span>Naam</span>
            <input type="text" name="name">
        </label>
        <label for="email">
            <span>E-mail</span>
            <input type="email" name="email">
        </label>
        <label for="review">
            <span>Rating</span>
            <input type="number" min="0" max="5" value="3" name="rating">
        </label>
        <label for="review">
            <span>Review</span>
            <textarea cols="30" rows="10" name="review"></textarea>
        </label>
        <input type="hidden" name="cocktail_id" value="<?= $cocktail->id; ?>">
        <button>Verstuur</button>
    </form>

    </main>
</body>
</html>