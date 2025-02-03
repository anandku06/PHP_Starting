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
    setcookie("favDessert", "GulabJamun", time() + (86400 * 4), "/"); 
?>