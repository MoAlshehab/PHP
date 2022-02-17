<?php

$naam = "";
$achtern= "";
$postcode =""; 
$plaats="";
$soort="";
if(isset($_POST["submit"])){
$soort= $_POST["soort"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza formulier</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body> <div class="a">
    <form method="POST">

        <label for="fname">Naam:</label><br> 
 
   <input type="text" name="naam" value="<?php echo $naam; ?>" placeholder="Uw naam" required/> <br><br> 
 
        <label for="achternaam">Achternaam:</label><br>
        <input type="text" name="achternaam" value="<?php echo $achtern; ?>" placeholder="Uw achternaam" required/><br><br> 

 

        <label for="postcode">Postcode:</label><br>
     
      <input type="text" name="postcode" value="<?php echo $postcode; ?>" placeholder="Uw postcode" required/><br><br> 
        <label for="plaats">Woonplaats:</label><br> 
    
      <input type="text" name="woonplaats" value="<?php echo $plaats; ?>" placeholder="Uw plaats" required/><br><br> 
 Bestellen Datum<input type="date" />  <br> <br>

 <input type="radio" name="m" id="t"/> <label for="t"> Bezorgen</label> 
 <input type="radio" name="m" id="t1"/> <label for="t1"> Afhalen</label>   </div>
<div class="b"> <h5> Margherita pizza </h5>
Tomatensaus, mozzarella en met knoflookolie 
op de rand van de pizza. Tip! Ook lekker met oregano.
 <h5>Funghi pizza </h5>
 Tomatensaus, mozzarella, champignons & pizzakruiden
Let op: de beschikbaarheid van producten kan per winkel verschillen.
 <h5>Marina pizza </h5>
 Het beste van twee werelden op één pizza. Bestel de Double 
 tasty en stel je eigen pizza samen. Eén pizza, twee smaken.
 <h5>Hawai pizza </h5>
 Tomatensaus, mozzarella, ham (kalkoen),
  ananas en extra mozzarella en knoflookolie op de rand.
 <h5> Quattro Formaggi pizza </h5>
 Tomatensaus, mozzarella, champignons, parmezaan flakes,
  truffeltapenade, peterselie en knoflookolie op de rand.</div>








<div class="c">
<hr>
<h1> 👇Hier onder mag je je pizza kiezen👇 </h1>
  Welke pizza kies je ? 
 
<select name="soort">
        <option value="niks"<?php if($soort=='niks'){ echo "selected";} ?>>Maak uw Keuze</option>
        <option value="Margrita"<?php if($soort=='Margherita'){ echo "selected";} ?>> Margherita  | €12,50 </option>
        <option value="Funghi"<?php if($soort=='Funghi'){ echo "selected";} ?>>Funghi  | €12,50 </option>
        <option value="Marina"<?php if($soort=='Marina'){ echo "selected";} ?> >Marina |  €13,95 </option>
        <option value="hawai"<?php if($soort=='hawai'){ echo "selected";} ?>>Hawai | €11,50 </option>
        <option value="Quattro Formaggi"<?php if($soort=='Quattro Formaggi'){ echo "selected";} ?> > Quattro Formaggi |€14,50 </option>
</select>

 Aantal <select name="aantal">
<option> 1</option>
 <option> 2</option>
 <option> 3</option>
 <option> 4</option>
 <option> 5</option>
 </select> <br><br> 
 <input type="checkbox" id="mo"/> <label for="mo"> Wil je een E-mail ontvagen </label>
 <br>
 <br>
 <input type="submit" name="submit" value="Bestellen"/> </div>
 </form> 
 <?php 
    switch($soort){
        case 'mar':
        echo "U hebt een pizza margerita";
   


    case'fun':
        echo "jij hebt een pizza fun";

   
    case 'mari':
        echo "U hebt een pizza Marian besteld ";

   case 'haw':
        echo "U hebt een pizza Hawai besteld ";


case 'qua':
    echo "U hebt een pizza Quattro Formaggi besteld en ";



    case 'niks':
        echo "Sorry,U moet nog een pizza kiezen ";


}
?>



</body>
</html>