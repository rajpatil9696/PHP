<?php
include("database.php");

$username = "john_doe";
$password = "securepassword123";
$hashed_password = password_hash($password, PASSWORD_BCRYPT); // hashing the password for security

$sql="insert into users(username,password) values('$username','$hashed_password')";

if(mysqli_query($connection, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection); // this will close the connection
?>