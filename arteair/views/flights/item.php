<a href='./order.php?flight_id=1' class="flight">
    <h2><?= $flight->from_name ?> -> <?= $flight->to_name ?></h2>
    <?= $flight->date ?> &bull; € <?= $flight->ticket_price ?><br>
    <?= $flight->aircraft_code ?> &bull; <?= $flight->model ?>
</a>