

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
<h2>Pizza's Inhoud </h2>

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





<h2>Menu</h2>


<div class="c">

<h1> 👇Hier onder mag je je pizza kiezen👇 </h1>

            <h3>Welke pizza kies je ? </h3>
  <br><br> <br> 
    <form method="post" action="pizzain.php">
    <label for="pizzamargherita">Pizza Margherita  12,50</label><br>
    <input type="number"  name="pizzamargherita" value="0" min="0"><br><br>
    <label for="pizzafunghi ">Pizza Funghi   12,50</label><br>
    <input type="number"  name="pizzafunghi" value="0" min="0"><br><br>
    <label for="pizzamarina">Pizza Marina  13,95</label><br>
    <input type="number"  name="pizzamarina" value="0" mi n="0"><br><br>
    <label for="pizzahawai">Pizza  Hawai  11,50</label><br>
    <input type="number" name="pizzahawai" value="0" min="0"><br><br>
    <label for="pizzaquattroformaggi">Pizza Quattro Formaggi  14,50</label><br>
    <input type="number" name="pizzaquattroformaggi" value="0" min="0"><br>


</div>

 <h2> Gegevens</h2>

 <div class="a">
    
   
    
 <label for="lname">Naam:</label><br>
        <input type="text" name="naam"  placeholder="Uw naam" required/><br><br> <br> 


        <label for="lname">Adres:</label><br>
        <input type="text"  name="adres" value="" required ><br><br> <br> 
        
        <label for="poscode">Postcode:</label><br>
        <input type="text" name="postcode" required/><br><br> <br> 

        <label class="l" for="lname">Woonplaats:</label><br>
        <input type="text" name="plaats" required/><br><br> <br> 
        <label for="lname">E-mail:</label><br>
        <input type="text" name="email" required /><br><br> <br> 

        <label for="fname">Besteldatum:</label><br>
  <input type="date"  name="besteldatum"min="<?=date('Y-m-d'); ?>" value="" required ><br><br><br>

   <input type="checkbox" id="mo"/> <label >Wil je een E-mail ontvagen </label><br>

            <input type="radio" name="bezorgkeuze" value="bezorgen">
            <label for="bezorgkeuze">Bezorgen</label>
            <input type="radio" name="bezorgkeuze" value="afhalen">
            <label for="bezorgkeuze">Afhalen</label><br>  
            <h5>Bezorzen kosten zijn  € 5 per bestelling </h5>  <br>
            <input class="button" type="submit"  name="bestellen" value="Bestellen">
      </div>
    </form>
</body>
</html>