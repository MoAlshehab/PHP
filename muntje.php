<!DOCTYPE html>

<form method="POST">
<input type="submit" name="submit" value="Gooi de munt"/>
</form>

<?php



function muntjeGooien(){
    $munt = mt_rand(0, 1);
     if($munt==0){
     echo "je hebt munt gegooid.";
     }else{
     echo "je hebt kop gegooid.";
     }
    }
    muntjeGooien();

?>
<?php 
if(isset($_POST["submit"]))

    ?>
</html>