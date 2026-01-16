<?php
$db_server='localhost';
$db_user='root';
$db_pass='';    
$db_name='businessDB';
$connection = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if($connection){
     echo "Database connected successfully";
} else {
    die("Database connection failed: " . mysqli_connect_error());
}
?>