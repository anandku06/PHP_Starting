<?php 
    session_start(); // here the session is resumed and the session variables in login page can be accessed in Home page as well
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: #212121; color: #fff">
    This is the Home page. <br>
    <form action="./home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form> 
</body>
</html>

<?php 

if(isset($_POST["logout"])){
    session_unset();
    session_destroy(); // destroys the session without saving any session variables 
    header("Location: ./index.php");
}

?>
