<?php
$capitals=array("india"=>"delhi","japan"=>"tokyo","england"=>"london","france"=>"paris","germany"=>"berlin");

$capitals["india"]="mumbai";
$capitals["china"]="beijing";

$keys=array_keys($capitals);

foreach($capitals as $key=>$value){
   echo "{$key} = {$value} <br>";
}
foreach($keys as $key){
    echo $key . "<br>";
}

echo count($capitals) // return count of pairs 

?>