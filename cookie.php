<?php

setcookie("user","raj patil",time()+3600); // Cookie will expire in 1 hour
echo "Cookie has been set. <br>";

foreach($_COOKIE as $key => $value){
    echo "Key: ".$key." Value: ".$value."<br>";
}

?>