<?php 
include("./database.php"); // including the database file for the db created

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql); // executes the given query on the specified db
// here the result var is an associative array or object that contains the queried data

if(mysqli_num_rows($result) > 0){
    // $row = mysqli_fetch_assoc($result); // for single row
    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $key => $value){
            echo $key . " => " . $value . "<br>";
        }
    } // for multiple rows

}
// checking whether the rows queried is greater than 1 using the mysqli_num_rows() function'
// if true, then fetching the rows data to a variable as an associative array using 'mysqli_fetch_assoc() function'
else{
    echo "NO users found!! <br>";
}

mysqli_close($conn); // closing the db connection
?>