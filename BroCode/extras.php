<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">
    <form action="./extras.php" method="post">
        <label for="username">UserName: </label>
        <input type="text" name="username"><br>

        <label for="password">Password: </label>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="LogIn">
    </form>
</body>
</html>

<?php

// isset() -> returns true if a variable is declared and not null
// empty() -> returns true if a variable is not declared, false , null and ""

$userName = "false";

echo isset(($userName)); // returns 1 (true) or nothing (false) when declared and not null ; returns false only when the vaiable is not declared or it is null
echo "<br>";

if(empty($userName)) {
    echo "This variable is empty!!<br>";
}
else{
    echo "This variable is not empty!!<br>";
}

//$_POST is technically an associative array that can be iterated when needed ; by using the foreach loop we can get the details of the form element

foreach($_POST as $key => $value){
    echo $key."=".$value."<br>";
}


if(isset($_POST["login"])){
    $userName = $_POST["username"];
    $passWord = $_POST["password"];

    if(empty($userName) || empty($passWord)) {
        echo "Please enter your credentials!!<br>";
    }
    else{
        echo "Hello $userName!!!<br>";
    }
}
?>