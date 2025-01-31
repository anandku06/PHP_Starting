<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body style="background-color: #212121; color: #fff;">
    
</body>
</html>

<?php

// arrays -> "variable" which can hold more than one value at a time

$foods = array("apple", "orange", "banana", "coconut"); // this is a function used to specify a variable as an array ; enter the values you want in your array

// echo $foods; // can't be accessed directly
echo $foods[0] . "<br>"; // elements can be accessed using indices

$foods[2] = "Pineapple"; // modified the array by accessing it by indices

array_push($foods, "mango"); // a function used to push any element specified into the array ; takes two params -> arrayName, and the element to be pushed

array_pop($foods); // a function used to pop or remove the last element from the array

array_shift($foods); // shifts the array by the beginning , shifts off the first element and returns it

$foods = array_reverse($foods); // returns the new reversed array

echo count($foods) . "<br>"; // counts the number of elements in the array

foreach ($foods as $food) {
    echo $food . "<br>";
} // foreach loop -> especially for arrays, take an variable that will traverse through the array here food will traverse through the foods array
?>