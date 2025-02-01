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
$phoneNumber = "123-456-7890";

$userName = strtolower($userName); // returns the string in lowercase
$userName = strtoupper($userName); // returns the string in uppercase
$userName = trim($userName); // trims any leading or former whitespaces
$userName = str_pad($userName, 20, "$"); // pads the string with another string to the specified length
$phoneNumber = str_replace("-", "", $phoneNumber); // replace the specified string with the required string
$userName = strrev($userName); // reverses the string and returns it
$userName = str_shuffle($userName); // randomly shuffles the string's characters position
$equals = strcmp($userName, $phoneNumber); // checks whether the two provided strings are same or not
$length = strlen($userName); // returns the string's length

$posi = strpos($userName,"r"); // returns the position of the specified element from the string

$user = substr($userName, 0, 4); // returns a new string from the specified string according to the starting and ending position given


echo $userName . "<br>";
echo $phoneNumber . "<br>";
echo $equals . "<br>";
echo $length . "<br>";
echo $posi . "<br>";

?>