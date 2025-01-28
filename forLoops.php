<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff">
    <form action="./forLoops.php" method="post">
        <label for="number">Enter a Number to print: </label>
        <input type="text" name="counter">
        <br>
        <label for="number">Enter a Number to print backwards: </label>
        <input type="text" name="downCounter">
        <input type="submit" value="Start">
    </form>
</body>
</html>

<?php
// for loop -> repeat some code a certain # of times.
// for($i = 0; i < n; i++) -> $i = 0 (initialisation : initialise a counter) ; $i < n (condition : jbtk ye condition is true tbtk loop runs) ; i++ (updation : counter variable is updated after every iteration)

// for ($i = 0; $i < 5; $i++) {
//     echo "hello<br>";
// }

$counter = $_POST["counter"];
$dcounter = $_POST["downCounter"];

for ($i = 1; $i <= $counter; $i++) {
    echo "$i<br>";
}

for ($i = $dcounter; $i > 0; $i--) {
    echo "$i<br>";
}
?>