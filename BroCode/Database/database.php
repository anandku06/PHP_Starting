<?php 

// important vars needed
$db_server = "localhost"; // name of the server
$db_user = "root"; // user of the database
$db_pass = ""; // password for the db
$db_name = "businessDB"; // name of the db
$conn = ""; 

try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    // used to establish a new connection to the database
    // takes four args -> serverName, user, pass, and nameDB 
    // if connection is successful, then this conn var is now an object
}
// bcz if the connection is failed then to show a custom error message
catch(mysqli_sql_exception){
    echo "Connection lost!! <br>";
}
// exception when the sql server is not connected, handled with a custom error message
?>