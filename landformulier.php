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

    <style>
        body{
             background-color:maroon;
             border: double;

                }
        div.naam{
            text-align: center;
            color:red;
            font-size: 20px;
            border-style: inset;
            background-color: white;
        }
        div.vlag{
            text-align: center;
            font-size: 50px;
            color: green;
            border-style: double;
            background-color: black;
        }


    </style>
</head>   
<body>
        <div class="naam">
        <form method="post" action="">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" value="<?php echo $naam; ?>" placeholder="Uw naam" required/><br/><br/><br/>
        <label for="naam">Land:</label>
        
    <select name="land">
        <option value="KEU"<?php if($land=='KEU'){ echo "selected";} ?>>Maak uw Keuze</option>
        <option value="NL"<?php if($land=='NL'){ echo "selected";} ?>>Nederland</option>
        <option value="DE"<?php if($land=='DE'){ echo "selected";} ?> >Duitsland</option>
        <option value="EN"<?php if($land=='EN'){ echo "selected";} ?>>Engeland</option>
        <option value="FR"<?php if($land=='FR'){ echo "selected";} ?>>Frankrijk</option>
        <option value="SP"<?php if($land=='SP'){ echo "selected";} ?>>Spanje</option>
        <option value="IT"<?php if($land=='IT'){ echo "selected";} ?>>Italië</option>
        <option value="CH" <?php if($land=='CH'){ echo "selected";} ?>>China</option>
    </select>
<br/> <br/><br/>
<input type="submit" name="submit" value="GegevensVersturen"/>

    </form> 
    <br/><br/><br/>
</div>
<div class="vlag">
    <?php
        switch($land){
            case 'NL':
            echo 'Goedemorgen '.$naam;
            echo "<br/><br/>";
            echo '<img src="NL.png"  width="200" height="150">';
        
        break;

        case'DE':
            echo 'Guten morgen '.$naam;
            echo "<br/><br/>";
            echo '<img src="du.png"  width="200" height="150">';
    break;
    
        case 'EN':
            echo 'GOOD MORNINING '.$naam;
            echo "<br/><br/>";
            echo '<img src="en.jpg"  width="200" height="150">';
    break;
      case 'FR':
            echo 'Bonjour '.$naam;
            echo "<br/><br/>";
            echo '<img src="fr.png" width="200" height="150">';
    break;

      case 'SP':
        echo 'Buenos días '.$naam;
        echo "<br/><br/>";
        echo '<img src="sp.png" width="200" height="150">';
    break;

      case 'IT':
        echo 'Buon giorno '.$naam;
        echo "<br/><br/>";
        echo '<img src="it.png"  width="200" height="150">';
    break;

      case'CH':
        echo '早上好 '.$naam;
        echo "<br/><br/>";
        echo '<img src="ch.png" width="200" height="150">';
   break;

        case 'KEU':
            echo "Sorry,U moet nog een land kiezen ";
            echo "<br/><br/>";
            echo '<img src="so.jpg"  width="200" height="150">';
    break;

    }
?>
</div>


</body> 
</html>