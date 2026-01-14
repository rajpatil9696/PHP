<?php 
$fruits =array("apple","orange","banana","mango","watermelon");

echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
echo $fruits[4]."<br>";

$fruits[0]="pineapple";
array_push($fruits,"kiwi");  // used to add element at last
array_pop($fruits); // used to remove last element 
array_shift($fruits); // used to remove first element 
$reversed = array_reverse($fruits); // used to reverse array 

foreach($fruits as $fruit){  // foreach is used to access each elemet from the array ;
    echo $fruit."<br>";
}

foreach($reversed as $fruit){  // foreach is used to access each elemet from the array ;
    echo $fruit."<br>";
}
?>