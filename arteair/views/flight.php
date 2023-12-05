   

<h1><?= $flight->from_name ?> -> <?= $flight->to_name ?> </h1>
<h3><?= $flight->date; ?></h3>
<p>€ 199,99 &bull; 777-31H &bull; Boeing 777</p>
<form method="POST" action="./place_order.php">
<div class="order_form">
    <div class="seats">
        <div class="row">
            <span>1</span>
            <div class="seat seat-ordered">A</div>
            <div class="spacer"></div>
            <div class="seat">B<input type="checkbox" name="TODO" value="TODO"></div>      
        </div>
    </div>
    <div class="form">
        Uw voornaam:   <input type="text" name="firstname" >  <br>
        Uw naam:   <input type="text" name="lastname">  <br>
        Uw e-mail:   <input type="text" name="email" >  <br>
        <input type="hidden" name="flight_id" value="TODO">
        <button type="submit">Bestelling afwerken</button>
    </div>                        
    </div>  
</form>