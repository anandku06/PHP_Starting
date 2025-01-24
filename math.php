<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions in PHP</title>
    <style>
        body{
            background-color: #212121;
            color: #fff;
        }
    </style>
</head>
<body>
    <form action="./math.php" method="post">
        <label for="number">X: </label>
        <input type="text" name="x">
        <label for="number">Y: </label>
        <input type="text" name="y">
        <label for="number">Z: </label>
        <input type="text" name="z">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
echo"".$x."<br>";

// math functions
$total = abs($x); // returns the absolute value
$total = round(abs($total)); // rounds up/down the number
$total = floor(abs($total)); // rounds down the number
$total = ceil(abs($total)); // rounds up the number
$total = pow($x, $y); // returns the raised value by the specified number ; exponents
$total = sqrt($x); // returns the square root of the number
$maximum = max($x, $y, $z); // returns the maximum number
$minimum = min($x, $y, $z); // returns the minimum number
echo"".$total."<br>";
echo"".$minimum."<br>";

?>