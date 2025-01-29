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

$capitals["India"] = "Patna"; // this is how to modify the values using the keys as indices

array_pop( $capitals ); // pops the last element from the array

$capKeys = array_keys($capitals); // returns all the keys in this specified array as a new array
foreach($capKeys as $key){
    echo "$key <br>";
}

$capValues = array_values($capitals); // returns all the values in this specified array as a new array
foreach($capValues as $value){
    echo "$value <br>";
}

foreach($capitals as $key => $value){
    echo "$key => $value <br>";
} // in the foreach loop giving the key and value as the vars for the pairs in the array to access them

?>