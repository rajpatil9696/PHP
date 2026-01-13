<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_function.php" method="post">
        <label for="x"> X :</label> <br>
        <input type="text" name="x"><br>
        <label for="y"> Y :</label> <br>
        <input type="text" name="y"><br>
        <input type="submit" value="Total"> 
    </form>
</body>
</html>

<?php 
$x=$_POST["x"];
$y=$_POST["y"];
$absolute = abs($x);  // this is absolute value function this gives +ve value 
$round=round($x);  // this is round function this will return the round() values means integer value of the element 
$floor=floor($x); // floor function is used to round down 
$ceil=ceil($x); // ceil function is used to round up 
$power=pow($x,$y);
$sqrt=sqrt($x);
$maximum=max($x,$y);
$minimum=min($x,$y);
$pi=pi();
$random=$rand(1,6); // it gives random value 1 is lower limit an 6 is upper limit rand() will return any random number betweeen lower and upper limit 
 
echo $absolute. "<br>" ;
echo $x. "<br>" ;
echo $round. "<br>" ;
echo $power. "<br>" ;
echo $sqrt. "<br>" ;

?>