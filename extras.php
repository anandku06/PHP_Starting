<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">
    
</body>
</html>

<?php

// isset() -> returns true if a variable is declared and not null
// empty() -> returns true if a variable is not declared, false , null and ""

$userName = "BroCode";

echo isset(($userName)); // returns 1 (true) or nothing (false) when declared and not null

if(isset($userName)) {
    echo "This variable is set!!<br>";
}
else{
    echo "This variable is not set<br>";
}

?>