<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body style="background-color: #212121; color: #fff">
    
</body>
</html>

<?php 
    // cookies -> information about a user stored in a user's web-browser, targeted advertisements, browsing preferences and other non-sensitive data

    setcookie("favFood", "pizza", time() + (86400 * 2), "/"); 
    // used to send a cookie to the browser
    // cookies stored as an associative array
    // args are : "key", "value", expireTime in secs, and the file path
    setcookie("favDrink", "Mojito", time() + (86400 * 3), "/"); 
    setcookie("favDessert", "GulabJamun", time() - 0, "/"); // to delete the cookie set the time to (- 0)

    foreach($_COOKIE as $key => $value){
        echo $key ." => ". $value ."<br>";
    }
    // $_COOKIE -> a super global variable that has all the cookies used in the website

    if(isset($_COOKIE["favFood"])){
        echo "Your favourite food is here -> {$_COOKIE["favFood"]}!!<br>";
    }
    else{
        echo "I don't know your food<br>";
    }
    // checks whether the cookie of this key is available or not
?>