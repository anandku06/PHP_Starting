<?php 
    // session -> a super-global variable used to store information on a user to be used across multiple pages.
    // a user is assigned a session-id ex. login credentials

    session_start(); // starts a new session or resumes an existing session

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff">
    This is the LogIN page. <br>
    <a href="./home.php">This goes to our Home page</a> <br>  
</body>
</html>

<?php 

    $_SESSION["username"] = "anand";
    $_SESSION["password"] = "a123";

    echo $_SESSION["username"] . "<br>" . $_SESSION["password"] . "<br>";

?>