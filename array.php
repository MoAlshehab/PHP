<?php 
$ptalen= array( "PHP" , "C#" , "HTML" , "javaScript", "Java " , "Css" ,"C++" );
array_push($ptalen , "Python" , "Swift");
sort($ptalen);
print_r($ptalen);

for($a=0;$a<count($ptalen);$a++){
    echo "<h3>" .$ptalen[$a] . " : " .$a. "</h3>";
}
?>