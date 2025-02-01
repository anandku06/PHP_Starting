<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">
    
</body>
</html>


<?php 

$userName = "Bro Code         ";

$userName = strtolower($userName); // returns the string in lowercase
$userName = strtoupper($userName); // returns the string in uppercase
$userName = trim($userName); // trims any leading or former whitespaces
$userName = str_pad($userName, 20, "$"); // pads the string with another string to the specified length

echo $userName . "<br>";

?>