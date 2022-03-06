<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewort" content="width=device-width,initial-scale=1.0">
        <title>PHP opdracht - vertaler</title>

    <style>

.button {
        display: inline-block;
        padding: 7px 14px;
        font-size: 30px;
        cursor: pointer;
        text-align: center;
        background-color: yellow;
        border-radius: 10px;
        box-shadow: 0 5px #999;
    }

    
body{
    padding-left: 200px;
    color:green;
    font-size: 50px;
    background-image: url(geld.jfif);
}


        </style>

    </head>
    <body>

<div class="knop">
<form method="POST">
<input  class="button" type="submit" name="submit" value="Gooi de munt"/>
</form>
</div>
<?php



function muntjeGooien(){
    $munt = mt_rand(0, 1);
     if($munt==0){
     echo "je hebt munt gegooid.";
     echo "<br/><br/>";
     echo '<img src="mun.jpg"  width="200" height="150">';
     }else{
     echo "je hebt kop gegooid.";
     echo "<br/><br/>";
     echo '<img src="kop.jpg"  width="200" height="150">';
     }
    }
    muntjeGooien();

?>
<?php 
if(isset($_POST["submit"]))

    ?>
    </body>
</html>