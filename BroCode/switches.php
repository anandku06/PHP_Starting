<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switches</title>
</head>
<body style="background-color: #212121; color: #fff;">
    
</body>
</html>

<?php

// switches -> replacement to using many elseif statements
//              more efficient, less code to write

$grade = "A";

// matching every possible values for the grade value
// these cases are checked for the values of grade variable
switch ($grade){
    case "A": 
        echo "You did great!!<br>";
        break;
    case "B":
        echo "You did good!!<br>";
        break;
    case "C":
        echo "You did okay!!<br>";
        break;
    case "D":
        echo "You did poorly!!<br>";
        break;
    case "F":
        echo "You failed!!<br>";
        break;
    
    default:
    echo "Invalid Grade";
}


$date = date("l"); // returns the current element of date as the format is specified.
// here format l will return the whole day

switch ($date){
    case "Monday":
        echo "I hate Mondays!!<br>";
        break;
    case "Tuesday":
        echo "I hate Tuesday!!<br>";
        break;
    case "Wednesday":
        echo "I hate Wednesday!!<br>";
        break;
    case "Thursday":
        echo "I hate Thursday!!<br>";
        break;
    case "Friday":
        echo "I hate Friday!!<br>";
        break;
    case "Saturday":
        echo "I love Saturdays!!<br>";
        break;
    case "Sunday":
        echo "I Love Sundays!!!!<br>";
        break;
    default:
    echo "Invalid day<br>";
}
?>