<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Card</title>
</head>
<body style="background-color: #212121; color: #fff">
    <form action="./menuCard.php" method="post">
        <label for="quantity">Quantity: </label>
        <input type="text" name="quantity">
        <input type="submit" name="submit" value="Total">
    </form>
</body>
</html>

<?php

$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered $quantity * $item/s <br>";
echo "Your total is \${$total}";

?>