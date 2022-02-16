

<form method="POST">
    Lengte <input type="number" name="l1" required>
    Breedte <input type="number" name="b1" required>
    <button type="submit" name="bereken">Bereken</button>
</form>
    
<?php
 if(isset($_POST['bereken'])) {

    function oppervlakteBerekenen($lengte,$breedte){
        return $lengte * $breedte;
    }

    $getresult =  oppervlakteBerekenen($_POST["l1"],$_POST["b1"]);{
    echo ' L ' .$_POST["l1"]  ." x ". ' B '.$_POST["b1"] ."=".$getresult; 
    }
}
    /* 
     * if(isset($_POST["bereken"])){
     *
     * echo  $_POST["l1"] * $_POST["b1"];
     *
     *}
     */

?>