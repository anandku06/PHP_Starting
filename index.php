<?php
echo "Hello World!!"; // string literal
echo "<br>", "Hey", "<br>";
?>

<?php
$userName = "Anand";
$food = "Litti Chokha";
$email = "fake@fake.com";

$age = 12; // no quotes around ; its a whole integer

echo $userName; // to use the declared var, same convention

echo "<br>", "Hello {$userName}"; // string interpolation : using the variable name within string ; under the barces given , specify the var name with the dollar sign
echo "<br>", "You like {$food}";
echo "<br>", "Your email is {$email}";
echo "<br>", "You are {$age} years old";
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