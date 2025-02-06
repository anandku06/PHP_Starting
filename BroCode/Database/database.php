<?php 

// important vars needed
$db_server = "localhost"; // name of the server
$db_user = "root"; // user of the database
$db_pass = ""; // password for the db
$db_name = "businessDB"; // name of the db
$conn = ""; 

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
// used to establish a new connection to the database
// takes four args -> serverName, user, pass, and nameDB 
// if connection is successful, then this conn var is now an object


if ($conn){
    echo "You are connected!! <br>";
}
else{
    echo "Connectino lost!! <br>";
}
?>