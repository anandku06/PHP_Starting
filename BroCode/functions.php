<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body style="background-color: #212121; color: #fff">
    
</body>
</html>

<?php 
// functions -> write some code once, reuse when you need it
//              type () after functions name to invoke
//              ex. add(), multiply(), etc.

/* 
this is how you declare a function ;
function (keyword) functionName (arguemnts (if any)) { body }

we can pass arguments to the function as variable and use them in the code
*/
function happyBirthday($name){
    echo "Happy Birthday to you!!! <br>";
    echo "Happy Birthday to $name!!! <br><br>"; // now we use that given arguments here
} 

happyBirthday("Keshav"); // this is how you invoke or call the function using the set of parenthesis
// if the function requires arguments, then in the set of parenthesis we give the parameters that can be use in the place of the arguments

happyBirthday("Ayush");
happyBirthday("Anand");

function evenOrOdd($num){
    return $num % 2 == 0 ? "Even!!<br>" : "Odd!!<br>";
}
// you can return any value from the function if needed using the return keyword!!

echo evenOrOdd(1);

?>