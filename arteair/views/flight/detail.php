   

<h1><?= $flight->from_name ?> -> <?= $flight->to_name ?> </h1>
<h3><?= $flight->date; ?></h3>
<p>€ 199,99 &bull; 777-31H &bull; Boeing 777</p>
<form method="POST" action="">
<div class="order_form">
    <div class="seats">
        

            <?php 
            print_r($aircraft->row_layout);
            for($i = 1; $i <= $aircraft->rows; $i++) {
                echo "<div class='row'><span>$i</span>";
                foreach(str_split($aircraft->row_layout) as $seat) {
                    include '_partial/seat.php';
                }
                echo "</div>";
            }?>
 
    <div class="form">
        Uw voornaam:   <input type="text" name="firstname" >  <br>
        Uw naam:   <input type="text" name="lastname">  <br>
        Uw e-mail:   <input type="text" name="email" >  <br>
        <input type="hidden" name="flight_id" value="TODO">
        <button type="submit">Bestelling afwerken</button>
    </div>                        
    </div>  
</form>