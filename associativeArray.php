<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body style="background-color: #212121; color: #fff">
    
</body>
</html>

<?php

// Associative Arrays -> an array where each element is key => value pairs
// example -> countries => capitals ; id => username ; item => price

$capitals = array(
    "USA" => "Washington DC",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
); // this is how a associative arrays are defined ; using key => value pairs

echo $capitals["USA"] . "<br>"; // this is how to access the values in associative array, using keys as indices

?>