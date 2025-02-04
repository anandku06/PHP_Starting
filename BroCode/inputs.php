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
        Age: <br>
        <input type="text" name="age"><br>
        Email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
// sanitizing the input field to prevent any mailicious code or script to run or execute

if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); // used to filter or sanitize any variable's value
    // here the username taken from the form is sanitized
    // args are like, first is the input_type(POST), others are the value to be filtered and the criteria of the filteration
    // (FILTER_SANITIZE_SPECIAL_CHARS) -> filters the variable from any special chars 

    echo "Hello {$username}<br>";
    
    $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);
    // FILTER_SANITIZE_NUMBER_INT -> filters or sanitizes the input with the characters other than numbers ; you'll only get numbers 
    
    $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
    
    // FILTER_SANITIZE_EMAIL -> filters or sanitize all the extra or not-needed chars from the email entered
    
    $age = filter_input(INPUT_POST,"age", FILTER_VALIDATE_INT);
    // FILTER_VALIDATE_INT -> validates the input variable provided is int or not; if not then returns false (empty string/space)

    if(empty($age)){ // if not int, then the filter will return the empty string, making the condition true
        echo "Input is invalid!!<br>";
    }
    else{
        echo "You are {$age} years old!!<br>";
    }
    
    $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL); 

    // FILTER_VALIDATE_EMAIL -> validates email whether in the correct format or not, if not then return false (empty string/space)

    if(empty($email)){ // if not in the provided email format, then the filter will return the empty string, making the condition true
        echo "Input is invalid!!<br>";
    }
    else{
        echo "Your email is -> {$email} !!<br>";
    }
}

?>