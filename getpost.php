<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body style="background-color: #212121; color: #fff">
    <form action="./getpost.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Enter your name"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

// echo $_GET["username"]; // using get variable to get the form info as the form method is set to get
// the problem is it appends the info submitted to the URL
// to get the info from the form, using the $_GET variable and with the square brackets, type in the name of the info you need under quotes

echo "<br>", $_POST["username"]; // same goes for the post var as well

?>