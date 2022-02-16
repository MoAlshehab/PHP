<?php
$naam = "";
$land="";
if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $land = $_POST["land"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewort" content="width=device-width,initial-scale=1.0">
    <title>PHP opdracht - vertaler</title>
</head>   
<body>
    <form method="post" action="">
    Naam: <input type="text" name="naam" value="<?php echo $naam; ?>" placeholder="Uw naam" required/><br/>
    Land:
    <select name="land">
        <option value="KEU"<?php if($land=='KEU'){ echo "selected";} ?>>Maak uw Keuze</option>
        <option value="NL"<?php if($land=='NL'){ echo "selected";} ?>>Nederland</option>
        <option value="DE"<?php if($land=='DE'){ echo "selected";} ?> >Duitsland</option>
        <option value="EN"<?php if($land=='EN'){ echo "selected";} ?>>Engeland</option>
        <option value="FR"<?php if($land=='FR'){ echo "selected";} ?>>Frankrijk</option>
        <option value="SP"<?php if($land=='SP'){ echo "selected";} ?>>Spanje</option>
        <option value="IT"<?php if($land=='IT'){ echo "selected";} ?>>Italy</option>
        <option value="CH" <?php if($land=='CH'){ echo "selected";} ?>>China</option>
    </select>
<br/>
<input type="submit" name="submit" value="GegevensVersturen"/>

    </form>
    <?php
    switch($land){
        case 'NL':
        echo 'Goedemorgen '.$naam;
   
    break;

    case'DE':
        echo 'Guten morgen '.$naam;
   break;
   
    case 'EN':
        echo 'GOOD MORNINING '.$naam;
    break;
   case 'FR':
        echo 'Bonjour '.$naam;
break;

case 'SP':
    echo 'Buenos días '.$naam;
break;

case 'IT':
    echo 'Buon giorno '.$naam;
break;

case'CH':
    echo '早上好 '.$naam;
    break;

    case 'KEU':
        echo "Sorry,U moet nog een land kiezen ";
    break;

}
?>



</body> 
</html>