<?php 
// db connections can be done by two ways:
// 1. MySQLi extension
// 2. PDO (PHP Data Objects)
include("./database.php"); // including the database connection file

$sql = "INSERT INTO users (user, password)
VALUES ('Peter', 'petre123')"; // giving a sql query to insert the values to DB

mysqli_query($conn, $sql); // performs the query ($sql) on the specified DB($conn)

mysqli_close($conn); // this is to close the connection made to the database
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body style="background-color: #212121; color: #fff">
    Hello
</body>
</html>
