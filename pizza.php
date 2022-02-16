

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
    <form method="POST">
<div>
        <label for="fname">Naam:</label>
 </div>
  <div> <input type="text" name="naam" value="<?php echo $naam; ?>" placeholder="Uw naam" required/> <br><br> 
  <div >
        <label for="fname">Achternaam:</label>
 </div>
 <div > <input type="text" placeholder= "voeg je achternaam" required/> <br><br> 
 <div>
        <label for="fname">Postcode:</label>
      </div>
<input type="text" placeholder= "voeg je postcode" required/> <br> <br>
<div>
        <label for="fname">Woonplaats:</label>
      </div>
<input type="text" placeholder= "voeg je woonplaats" required/>  <br> <br>
 Bestellen Datum<input type="date" />  <br> <br>

 <input type="radio" name="m" id="t"/> <label for="t"> Bezorgen</label> 
 <input type="radio" name="m" id="t1"/> <label for="t1"> Afhalen</label> 
<hr>
<h1> 👇Hier onder mag je je pizza kiezen👇 </h1>
  Welke pizza kies je ? 
  <input  list="pizza"/>
	<datalist  id="pizza"> 
    <option value="Kaas"<?php if($pizza=='Kaas'){ echo "selected";} ?>> </option>
	<option value=" Margrita">
	<option value="Funghi">
	<option value="Marina">
	<option value="Hawai">
	<option value="Quattro Formaggi">
	</datalist>

 Antal <select>
<option> 1</option>
 <option> 2</option>
 <option> 3</option>
 <option> 4</option>
 <option> 5</option>
 </select> <br><br> 
 <input type="checkbox" id="mo"/> <label for="mo"> Wil je mening delen </label>
 </select> <br>
 <br>
 <input type="submit" name="submit" value="Bestellen"/>
 </form>
</body>
</html>