<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121;color:#fff">
    
</body>
</html>

<?php
// Logical operators: combine conditional statements
// if(condition1 &&/|| condition2)

// && -> true if both conditions are trur
// || -> true if atleast one condition is true
// ! -> true if false and vice-versa

$temp = 125;
$cloudy = true;

// if ($temp >= 0 && $temp <= 30) // here the both condition should be true then the if statement will work

// if ($temp >= 0 || $temp <= 30) // here atleast one condition should be true

if ($temp >= 0 || $temp <= 30) {
    echo "Weather is good!!<br>";
} 
else{
    echo "The weather is bad!!<br>";
}

if(!$cloudy){ // here when cloudy is true then it is considered as false and vice-versa
    echo "It's sunny!!<br>";
}
else{
    echo "It's cloudy!!<br>";
}


$age = 25;
$citizen = true;

if($citizen && $age >= 18){
    echo "You can vote!!<br>";
}
else{
    echo "You can't vote!!<br>";
}
?>