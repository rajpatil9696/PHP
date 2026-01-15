<?php

$password="raj@1123";
$hash=password_hash($password,PASSWORD_BCRYPT);
echo "Hashed Password: ".$hash."<br>";

if(password_verify($password,$hash)){
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}

?>