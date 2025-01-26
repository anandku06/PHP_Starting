<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff">
    
</body>
</html>

<?php
// if statement -> if some condition is true, then we do something
// else statement -> if all the conditions are false, then we do something
// elseif statement -> if the 'if' statement is false, then it'll be checked 
// note that the conditions are checked top-bottom, so if the upper conditions became true then the actual conditon may not be evaluated

$age = -12;

if ($age >= 18) {
    echo "You may enter this site!! <br>";
}
elseif( $age < 0) {
    echo "You haven't born yet!!! <br>";
}
else{
    echo "You are too young for this!! <br>";
}


$hours = 90;
$rate = 15;
$weekly_pay = null;

if($hours < 0){
    $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

echo "You made \${$weekly_pay} this week!! <br>";

?>