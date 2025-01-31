<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radius</title>
</head>
<body style="background-color: #212121; color: #fff">
    <form action="./radius.php" method="post">
        <label for="radius">Radius: </label>
        <input type="text" name="radius" placeholder="Enter radius">

        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2); // round function takes two args, one the number to be round off and then the precision

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius,2);
$volume = round($volume, 2);

echo "Circumference: {$circumference}cm <br>";
echo "Area is: {$area}cm^2 <br>";
?>