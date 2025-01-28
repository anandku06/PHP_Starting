<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">
    <form action="./whileLoops.php" method="post">
        <input type="submit" name="stop" value="Stop">
    </form>
</body>
</html>

<?php
// while loop -> do some code infinitely while some condition is true

// $counter = 1;
// while($counter <= 10){
//     echo $counter, "<br>";
//     $counter++;
// }

$seconds = 0;
$isRunning = true;
while($isRunning){
    if(isset($_POST["stop"])){
        $isRunning = false;
    }
    else{
        echo $seconds . "<br>";
        $seconds++;
    }
}

?>