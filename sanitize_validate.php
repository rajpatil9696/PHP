<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sanitize & Validate</title>
</head>
<body>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username"><br><br>

    <label>Age:</label>
    <input type="text" name="age"><br><br>

    <label>Email:</label>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    // Validate username
    if (preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        echo "Valid username: " . htmlspecialchars($username);
    } else {
        echo "Invalid username.";
    }

    // Validate age
    if (filter_var($age, FILTER_VALIDATE_INT) !== false) {
        echo "<br>Valid age: " . htmlspecialchars($age);
    } else {
        echo "<br>Invalid age.";
    }

    // Sanitize + validate email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>Valid email: " . htmlspecialchars($email);
    } else {
        echo "<br>Invalid email format.";
    }
}
?>

</body>
</html>
