


<?php
  
$float_mar= 12.50;
$float_fun=12.50;
$float_mari=13.95;
$float_haw=11.50;
$float_qua=14.50;
$bezorg=5;
$aantal="";
$soort="";
if(isset($_POST["submit"])){
$soort= $_POST["soort"];
$aantal= $_POST["aantal"];
$datum = new DateTime("now");
echo $datum->format('Y-m-D H:i:s');

}

     if(isset($_GET["data"])){
        echo $_GET["data"];
        echo"<br>";
        echo $_GET["dat1"];
        echo"<br>";
         echo $_GET["dat2"];
         echo"<br>";
         echo $_GET["dat3"];
         echo"<br>";
         echo $_GET["dat4"];
         echo"<br>";
         
     
        }

 switch($aantal){
    case '0':
        echo  "U moet nog aantal pizza kiezen ";
        break; 
    case '1':
    echo  "U hebt ".$aantal ." keer";
    break; 
  case '2':
    echo  "U hebt ".$aantal." keer";
 break; 
        
 case '3':
 echo  "U hebt ".$aantal ." keer";
 break; 
            
 case '4':
echo  "U hebt ".$aantal ." keer ";
 break; 
               
 case '5':
 echo "U hebt ".$aantal ." keer";
break; }

    switch($soort){
        case 'Marghrita':
        echo ' pizza margherit besteld en de kosten zijn  €'.$float_mar * $aantal ." Plus bezorgen kosten is €" .$bezorg  ." dus in totaal € " .$bezorg += $float_mar * $aantal;
        break;


    case'Funghi':
        echo ' pizza funghi besteld en de kosten zijn  €'.$float_fun * $aantal. " Plus bezorgen kosten is €" .$bezorg  ." dus in totaal € " .$bezorg += $float_fun* $aantal;
        break;
   
    case 'Marina':
        echo ' pizza Marian besteld en de kosten zijn  €'.$float_mari * $aantal. " Plus bezorgen kosten is €" .$bezorg  ." dus in totaal € " .$bezorg += $float_mari * $aantal;
        break;
   case 'hawai':
        echo ' pizza Hawai besteld en de kosten zijn  €'.$float_haw * $aantal." Plus bezorgen kosten is €" .$bezorg ." dus in totaal € " .$bezorg += $float_haw * $aantal;
        break;

case 'Quattro Formaggi':
    echo ' pizza Quattro Formaggi besteld de kosten zijn  €'.$float_qua * $aantal." Plus bezorgen kosten is €" .$bezorg ." dus in totaal € " .$bezorg += $float_qua * $aantal;

    break;

    case 'niks':
        echo " Sorry,U moet nog een pizza kiezen ";

        break;
}

?>
