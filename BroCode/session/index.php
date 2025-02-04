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
    <title>LogIN</title>
</head>
<body style="background-color: #212121; color: #fff">
    <form action="./index.php" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        Password: <br>
        <input type="password" name="password"> <br>

        <input type="submit" name="login" value="Login">
    </form> 
</body>
</html>

<?php 

    // $_SESSION["username"] = "anand"; // this global variable stores the session creds like username, password etc. as key => value pairs 
    // $_SESSION["password"] = "a123";

    if(isset($_POST["login"])){
        
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"]; // first sanitizing the input then assigning to the session
            $_SESSION["password"] = $_POST["password"];

            header("Location: ./home.php"); // takes raw HTTP headers and also used to create routes

            exit("Routing to Home page!!");
        }
        else{
            echo "Username/Password missing!! <br>";
        }
    }

?>