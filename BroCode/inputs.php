<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validating Inputs</title>
</head>
<body style="background-color: #212121; color: #fff;">
    <form action="./inputs.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
// sanitizing the input field to prevent any mailicious code or script to run or execute

if(isset($_POST["login"])){
    $username = $_POST["username"];

    echo "Hello {$username}<br>";
}

?>