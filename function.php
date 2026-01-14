<?php
function happybirthday($name){
    echo "happy birthday to you dear " . $name . "<br>";
}
happybirthday("raj");
happybirthday("patil");

function iseven($num){
    if($num % 2 == 0){
        echo "true<br>";
    }else{
        echo "false<br>";
    }
}

iseven(4); // returns true
iseven(5); // returns false
?>