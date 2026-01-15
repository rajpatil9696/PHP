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
    <h1>This is Login Page </h1>
    <br>
    <br>
    <form action="session.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username"> <br> <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"> <br> <br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php 

if(isset($_POST["login"])){
  if(isset($_POST['username']) && isset($_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Password: " . $_SESSION['password'] . "<br>";

    header("Location: home.php");
  }
  else{
    echo "Please enter username/password.";
  }
}

?>