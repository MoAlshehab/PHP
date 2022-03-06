<?php

function func() {
    echo "+het is mo test\n";
    }
   
    echo "- Deze code is voor de for-lus uitgevoerd.\n";
   
    for ($counter=1;$counter<=11;$counter++) {
    echo "= Deze code is in de for-lus\n";
    echo " maar voor func() uitgevoerd.\n";
    func();
    echo "= Deze code is in de for-lus\n";
    echo " maar na func() uitgevoerd.\n";
    }
   
   
    echo "- Deze code is na de for-lus uitgevoerd.\n";
   


    function berekenBtw($bedragExBtw){

        return $bedragExBtw * 0.21;
        
        }
         
        
           echo berekenBtw(100);
        





// het is de tweede manier van funtion return en het is gelukt...
/*
function setresult($number1,$number2){

    return $number1 *$number2;
}

$getresult = setresult(100,12);

echo $getresult;
*/







// het is een test en hij doet wel ..... 
/*
function test(){

    $test= "Het is een test voor retyurn funtion";
    return $test;
}
$kijk = test();

echo $kijk;*/





// dat is de opdracht zelf ....


?>