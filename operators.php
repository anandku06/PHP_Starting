<?php
$x = 10;
$y = 2;
$z = $x + $y; // addition
$z = $x - $y; // subtraction
$z = $x * $y; // multiplication
$z = $x / $y; // division
$z = $x ** $y; // exponential
$z = $x % $y; // returns remainder of this division

echo $z . "<br>";

// Increment/Decrement operator

$counter = 10;

// $counter = $counter + 1; // cumbersome to write
// $counter++; // same output and working // increment operator
$counter--; // decrement operator // same as counter = counter - 1;

// Operator Precedence

$total = 1 + 2 - 12 / 5 ** 6; // following the precedence the exponents are solved first, then if the precedence of operators are same then the solution is from left to right

echo $counter , "<br>", $total; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body style="background-color: #212121; color: #fff">
    
</body>
</html>