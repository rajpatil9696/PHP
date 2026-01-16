<?php
include('database.php');

$sql="SELECT * FROM businessDB";
$result=mysqli_query($connection, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No records found.";
}

mysqli_close($connection);
?>