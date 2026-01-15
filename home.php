<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Home Page </h1>
    <br>
    <br>
    <a href="session.php">Login Page</a> <br> <br>
</body>
</html>
<?php 

$_SESSION['username'] = "Raj Patil";
$_SESSION["password"] = "12345";

echo $_SESSION['username']. "<br>";
echo $_SESSION['password'] . "<br>";
?>