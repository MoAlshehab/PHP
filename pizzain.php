
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza formulier</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body>
<div class="r">

<?php

if(isset($_POST["bestellen"])){

    $pizzamargherita = $_POST['pizzamargherita'];
    $pizzafunghi = $_POST['pizzafunghi'];
    $pizzamarina = $_POST['pizzamarina'];
    $pizzahawai = $_POST['pizzahawai'];
    $pizzaquattroformaggi = $_POST['pizzaquattroformaggi'];
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $email = $_POST['email'];
    $besteldatum = $_POST['besteldatum'];
    
    $margheritaprijs = 12.50;
    $funghiprijs=12.50;
    $marinaprijs=13.95;
    $hawaiprijs=11.50;
    $quattroformaggiprijs=14.50;

}

if(isset($_POST["bestellen"])){

$datum = new DateTime("now");
echo $datum->format('Y-m-D H:i:s');
echo "<br />";
}
$totaalbedrag = 0;
$bezorgkosten = 0;
$bezorgkeuze = $_POST['bezorgkeuze'];
if($bezorgkeuze=="bezorgen"){
    $bezorgkosten = 5;
}
$timestamp = strtotime($besteldatum);
    $day = date('l', $timestamp);
if($day == "Monday"){
    $margheritaprijs = 7.5;
    $funghiprijs = 7.5;
    $marinaprijs = 7.5;
    $hawaiprijs = 7.5;
    $quattroformaggiprijs = 7.5;
}


?>
<?php 
    if($pizzamargherita > 0){
        echo "Pizza Margherita: Aantal: " . $pizzamargherita . " Prijs:€". ($margheritaprijs * $pizzamargherita);  
        $totaalbedrag += ($margheritaprijs * $pizzamargherita);
    }
    ?>
    <br>
    <?php 
    if($pizzafunghi > 0){
        echo "Pizza Funghi: Aantal: " . $pizzafunghi . " Prijs:€". ($funghiprijs * $pizzafunghi);  
        $totaalbedrag += ($funghiprijs * $pizzafunghi);
    }
    ?>
    <?php 
    if($pizzamarina > 0){
        echo "Pizza Marina: Aantal: " . $pizzamarina . " Prijs:€". ($marinaprijs * $pizzamarina);
        $totaalbedrag += ($marinaprijs * $pizzamarina);  
    }
    ?>
    <br>
    <?php 
    if($pizzahawai > 0){
        echo "Pizza Hawai: Aantal: " . $pizzahawai . " Prijs:€". ($hawaiprijs * $pizzahawai);
        $totaalbedrag += ($hawaiprijs * $pizzahawai);  
    }
    ?>
    <br>
    <?php 
    if($pizzaquattroformaggi > 0){
        echo "PizzaQuattro Formaggi: Aantal: " . $pizzaquattroformaggi . " Prijs:€". ($quattroformaggiprijs * $pizzaquattroformaggi);
        $totaalbedrag += ($quattroformaggiprijs * $pizzaquattroformaggi);   
    }
    ?>
    <br>
    <?php
    if($bezorgkosten>0){
        echo "Bezorgkosten is: €5";
        $totaalbedrag += $bezorgkosten;
    }
    if($day == "Friday" && $totaalbedrag > 20){
        $kortingbedrag = $totaalbedrag * (0.15);
        echo "<br />Korting op vrijdag boven €20 is €". $kortingbedrag;
        echo "<br />";
       echo "<br />Totaal: €". $totaalbedrag;
        $totaalbedrag = $totaalbedrag - $kortingbedrag;
    }
 echo " Het totaalbedrag met korting is: €" . $totaalbedrag; ?>
    <br><br>
    <?php echo $naam; ?>
    <br>
    <?php echo $adres; ?>
    <br>
    <?php echo $postcode; ?>
    <br>
    <?php echo $plaats; ?>
    <br>
    <?php echo $email; ?>
    <br>
    <?php echo $besteldatum; ?>
    <br>

    <a  class="t" href="pizzainhtml.php">Terug naar bestellen 😊</a>
    <?php
    ?>
 </div>
</body>
</html>