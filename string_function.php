<?php
$username = "raj Patil ";

$username=strtolower($username);
echo "Lowercase: " . $username ."<br>";
$username=ucwords($username);
echo "Title Case: " . $username . "<br>";
$username=strtoupper($username);
echo "Uppercase: " . $username . "<br>";
$username=trim($username);
echo "Trimmed: " . $username . "<br>"; //used to remove spaces from both ends
$username=str_replace("RAJ", "Vijay", $username);
echo "Replaced: " . $username . "<br>";

$equals = strcmp("Hello", "hello");
if ($equals == 0) {
    echo "Strings are equal<br>";
} else {
    echo "Strings are not equal<br>";
}

$length = strlen($username);
echo "Length of username: " . $length . "<br>";



?>