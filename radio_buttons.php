<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_buttons.php" method="post">
    <input type="radio" name="credit_card" value="visa">
    visa <br>
    <input type="radio" name="credit_card" value="mastercard">
    mastercard <br>
    <input type="radio" name="credit_card" value="paypal">
    paypal <br>
    <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php
 
 if(isset($_POST['confirm'])){
    $card=$_POST['credit_card'];
    echo "you have selected " . $card . " as your payment method";
 }

?>