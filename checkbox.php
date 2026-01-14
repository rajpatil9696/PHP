<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post"> 
        <input type="checkbox" value="pizza" name="Pizza">
        pizza <br>
        <input type="checkbox" value="burger" name="Burger">    
        burger <br>
        <input type="checkbox" value="pasta" name="Pasta">
        pasta <br>
        <input type="submit" value="order now" name="order">
    </form>
</body>
</html>
<?php 
  if(isset($_POST['order'])){
    if(isset($_POST['Pizza'])){
        echo "you have ordered " . $_POST['Pizza'] . "<br>";
    }
    if(isset($_POST['Burger'])){
        echo "you have ordered " . $_POST['Burger'] . "<br>";
    }
    if(isset($_POST['Pasta'])){
        echo "you have ordered " . $_POST['Pasta'] . "<br>";
    }
  }


?>